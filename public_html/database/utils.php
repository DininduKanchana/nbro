<?php

function sanitize_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return mysqli_real_escape_string($GLOBALS['db'], $data);
}

function getArgsString($columns, $args) {
  $str = "";

  foreach ($columns as $key => $value) {
    if (isset($args[$key])) {
      $columns[$key] = $args[$key];
    }
  }
  
  foreach ($columns as $key => $value) {
    $str = $str . "" .$key . "='" . $value. "',";
  }

  return rtrim($str,',');
}

function getDateTime($dateTime) {
  $date = date_create_from_format('Y,D,M,d,G,i,s', $dateTime);
  return date_format($date, 'Y-m-d G:i:s');
}

function calculateAQI($pm2) {
  return round(($pm2/35) * 100);
}

?>