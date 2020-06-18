<!-- <!DOCTYPE html>
<head>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
  <meta http-equiv="content-type" content="text/html; ch3arset=UTF-8" />
  <title>Dynamic Air Quality Map Sri Lanka
  </title>
  <style>
    /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
    #map {
      height: 100%;
    }
    /* Optional: Makes the sample page fill the window. */
    html,
    body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
  </style>
</head> -->

<?php
include_once('./userHeader.php');
?>

<body>
<style type="text/css">
 
 #map1 {
      height: 100%;
    }
    /* Optional: Makes the sample page fill the window. */
  html,
  body {
    height: 100%;
    margin: 0;
    padding: 0;
  }

</style>
  <div id="map1">
      <?php include_once('./map/MapComponent.php'); ?>
  </div>
</body>
