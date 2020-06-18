
<?php 
require_once './GmailClient.php';
require_once '../database/Locations.php';
require_once '../database/LocationValues.php';

// if (php_sapi_name() != 'cli') {
//   throw new Exception('This application must be run on the command line.');
// }


// Gmail api related data
$client = getClient();
$service = new Google_Service_Gmail($client);

// Print the labels in the user's account.
$user = 'me';

$locations = selectAllLocations();

if ($locations) {
    while ($row = mysqli_fetch_assoc($locations)) {
        $subjectText = $row["subject_text"];

        if ($subjectText) {
            $messages = listMessages($service, $user, $subjectText, 'aqslnbro@gmail.com');

            if (count($messages) > 0) {
                $row = mysqli_fetch_assoc(selectLatestBySubjectText($subjectText));

                $lastLine = getDataFromAttachment($service, $user, $messages[0]->getId())[0];
          
                if (preg_match('/"([^"]+)"/', $lastLine, $m)) {
                    $date = date_create_from_format('Y,D,M,d,G,i,s', $m[1]);
            
                    $dateTimeStr = date_format($date, 'Y-m-d G:i:s');

                    if ($dateTimeStr > $row["timestamp"]) {
                        insertBySubjectText($dateTimeStr, getValue1($lastLine),
                         getValue2($lastLine), getValue3($lastLine), getValue4($lastLine), $subjectText);
                    }
                } else {
                    echo 'no date value in the data string<br/>';
                }
            } else {
                echo "no messages found for $subjectText<br/>";
            }
        } else {
            echo 'subject text is empty<br/>';
        }
    }
}

// PM2.5
function getValue1(string $dataLine) {
  return explode(",", $dataLine)[7];
}

// PM10
function getValue2(string $dataLine) {
  return explode(",", $dataLine)[9];
}

// Tempareture
function getValue3(string $dataLine) {
  return explode(",", $dataLine)[19];
}

// CO2
function getValue4(string $dataLine) {
  return explode(",", $dataLine)[22]; // second item from the end
}

?>