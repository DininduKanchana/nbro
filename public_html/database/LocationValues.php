<?php
require_once("config.php");
require_once("utils.php");

function insertBySubjectText($timestamp, $value1, $value2, $value3, $value4, $subjectText) {
  $sql = "INSERT INTO location_values(timestamp, value1, value2, value3, value4, location_id) VALUES
   ('$timestamp', $value1, $value2, $value3, $value4, (SELECT id FROM locations WHERE subject_text = '$subjectText'))";

  return db_query($sql);
}

function selectLatestBySubjectText($subjectText) {
  $sql = "SELECT * FROM location_values WHERE location_id = 
  (SELECT id FROM locations WHERE subject_text = '$subjectText') ORDER BY timestamp DESC LIMIT 1";
  return db_query($sql);
}


?>
