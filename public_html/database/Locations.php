<?php

require_once("config.php");
require_once("utils.php");

function selectAllLocations() {
  return db_query("SELECT * FROM `locations`");
}

function selectLocation($id) {
  $id = sanitize_input($id);
  return db_query("SELECT * FROM `locations` WHERE id = ". $id);
}

function insertLocation($name, $lat, $lng, $subject_text) {
  $name = sanitize_input($name);
  $lat = sanitize_input($lat);
  $lng = sanitize_input($lng);
  $subject_text = sanitize_input($subject_text);

  return db_query("INSERT INTO `locations` (`name`, `lat`, `lng`, `subject_text`) VALUES (" . $name . "," . $lat . "," . $lng . "," . $subject_text . ")");
}

function updateLocationById($id, $arags) {
  $location = selectLocation($id);

  $row = mysqli_fetch_assoc($location);
  $columns = array_slice($row, 1);

  $str = getArgsString($columns, $arags);

  $id = sanitize_input($id);
  $str = sanitize_input($str);

  db_query("UPDATE locations SET $str WHERE id = $id");
}

function selectMapData() {
  $sql = "select DISTINCT(name), address, lat, lng, value1 * 2.875 as aqi, value1, value2, value3, value4, time from
    (select id, x.location_id, x.time, value1, value2, value3, value4
      from (
        select location_id, max(timestamp) as time
        from location_values group by location_id
      ) as x inner join location_values as f on f.location_id = x.location_id and f.timestamp = x.time) 
    as latest_values INNER JOIN locations ON locations.id = latest_values.location_id
  ";

  return db_query($sql);

}

?>
