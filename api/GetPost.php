<?php
include("C:/xampp/htdocs/embedded-systems-assignment/public/connection.php");
    $query = "SELECT * from sensor_records";
    $result = mysqli_query( $connection, $query );
   
   if(! $result) {
      die('Could not get data: ' . mysqli_error($connection));
   }
   $connection->close();
?>


