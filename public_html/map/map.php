<?php
require_once("../database/Locations.php");

function parseToXML($htmlStr) {
  $xmlStr=str_replace('<','&lt;',$htmlStr);
  $xmlStr=str_replace('>','&gt;',$xmlStr);
  $xmlStr=str_replace('"','&quot;',$xmlStr);
  $xmlStr=str_replace("'",'&#39;',$xmlStr);
  $xmlStr=str_replace("&",'&amp;',$xmlStr);
  return $xmlStr;
}

$result = selectMapData();


header("Content-type: text/xml");

// Start XML file, echo parent node
echo "<?xml version='1.0'?>";
echo '<markers>';
$ind=0;
// Iterate through the rows, printing XML nodes for each
while ($row = @mysqli_fetch_assoc($result)){
  // Add to XML document node
  echo '<marker ';
  echo 'name="' . parseToXML($row['name']) . '" ';
  echo 'address="' . parseToXML($row['address']) . '" ';
  echo 'lat="' . $row['lat'] . '" ';
  echo 'lng="' . $row['lng'] . '" ';
  echo 'aqi="' . $row['aqi'] . '" ';
  echo 'value1="' . $row['value1'] . '" ';
  echo 'value2="' . $row['value2'] . '" ';
  echo 'value3="' . $row['value3'] . '" ';
  echo 'value4="' . $row['value4'] . '" ';
  echo 'time="' . $row['time'] . '" ';
  echo '/>';
  $ind = $ind + 1;
}

// End XML file
echo '</markers>'

?>