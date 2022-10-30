<?php
include("C:/xampp/htdocs/sandrine_iot_assignment_version_2/public/connection.php");
     if(isset($_POST['submit'])) {
      $device_name = $_POST['name'];
      $query = "SELECT * from sandrine_temperature_data std JOIN sandrine_devices sd on std.deviceId = sd.id where sd.name = '$device_name';";
     }
     
     else {
      $query = "SELECT * from sandrine_temperature_data std JOIN sandrine_devices sd on std.deviceId = sd.id;";
     }
      $result = mysqli_query( $connection, $query );

     if($result->num_rows <= 0) {
      echo "<script>alert(\"The $device_name device has not sent any data yet\")</script>";
      $query = "SELECT * from sandrine_temperature_data std JOIN sandrine_devices sd on std.deviceId = sd.id;";
      $result = mysqli_query( $connection, $query );
     }

     if(! $result) {
      die('Could not get data: ' . mysqli_error($connection));
   }
?>
