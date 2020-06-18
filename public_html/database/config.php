<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'id4105814_root');
   define('DB_PASSWORD', 'dinindu');
   define('DB_DATABASE', 'id4105814_air');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

   function db_query($query) {
      $result = mysqli_query($GLOBALS['db'], $query);
     
      if ($result === false) {
        printf("Error message: %s\n", mysqli_error($GLOBALS['db']));
        return false;
      } else {
        return $result;
      }
    }
?>
