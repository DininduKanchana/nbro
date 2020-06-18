<?php
require_once '../google-api-php-client/vendor/autoload.php';

function getClient()
{
  $client = new Google_Client();
  $client->setApplicationName('Gmail API PHP Quickstart');
  $client->setScopes(Google_Service_Gmail::GMAIL_READONLY);
  $client->setAuthConfig('../../secret/credentials.json');
  $client->setAccessType('offline');
  $client->setPrompt('select_account consent');

  // Load previously authorized token from a file, if it exists.
  // The file token.json stores the user's access and refresh tokens, and is
  // created automatically when the authorization flow completes for the first
  // time.
  $tokenPath = 'token.json';
  if (file_exists($tokenPath)) {
      $accessToken = json_decode(file_get_contents($tokenPath), true);
      $client->setAccessToken($accessToken);
  }

  // If there is no previous token or it's expired.
  if ($client->isAccessTokenExpired()) {
      // Refresh the token if possible, else fetch a new one.
      if ($client->getRefreshToken()) {
          $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
      } else {
          // Request authorization from the user.
          $authUrl = $client->createAuthUrl();
          printf("Open the following link in your browser:\n%s\n", $authUrl);
          print 'Enter verification code: ';
          $authCode = trim(fgets(STDIN));

          // Exchange authorization code for an access token.
          $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
          $client->setAccessToken($accessToken);

          // Check to see if there was an error.
          if (array_key_exists('error', $accessToken)) {
              throw new Exception(join(', ', $accessToken));
          }
      }
      // Save the token to a file.
      if (!file_exists(dirname($tokenPath))) {
          mkdir(dirname($tokenPath), 0700, true);
      }
      file_put_contents($tokenPath, json_encode($client->getAccessToken()));
  }
  return $client;
}

function listMessages($service, $userId, $subjectText, $fromEmail) {
  $pageToken = NULL;
  $messages = array();
  $opt_param = array("q"=>"newer_than:1h from:$fromEmail subject:$subjectText");
  do {
    try {
      if ($pageToken) {
        $opt_param['pageToken'] = $pageToken;
      }
      $messagesResponse = $service->users_messages->listUsersMessages($userId, $opt_param);
      if ($messagesResponse->getMessages()) {
        $messages = array_merge($messages, $messagesResponse->getMessages());
        $pageToken = $messagesResponse->getNextPageToken();
      }
    } catch (Exception $e) {
      print 'An error occurred: ' . $e->getMessage();
    }
  } while ($pageToken);

  foreach ($messages as $message) {
    print 'Message with ID: ' . $message->getId() . '<br/>';
  }

  return $messages;
}

function getDataFromAttachment($service, $userId, $messageId) {
  $attachmentId = 'attachmentId';
  $headers =  'headers';

  try {
    $message = $service->users_messages->get($userId, $messageId);
    $message_payload_details = $message->getPayload()->getParts();

    $attachmentDetails = array();
    $attachmentDetails[$attachmentId] = $message_payload_details[1]['body'][$attachmentId];
    $attachmentDetails[$headers] = $message_payload_details[1][$headers];

    $attachmentObj = $service->users_messages_attachments->get($userId, $messageId, $attachmentDetails[$attachmentId]);
    $data = $attachmentObj->getData();

    $data = strtr($data, array('-' => '+', '_' => '/'));

    return array_values(array_slice(explode("\n", base64_decode($data)), -2));

  } catch (Exception $e) {
    print 'An error occurred: ' . $e->getMessage();
  };

}

?>