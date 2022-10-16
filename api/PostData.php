<?php
    include("../public/connection.php");
    $temperature = $_POST["temperature"];
    $device = $_POST["device"];

    var_dump($_POST);

    $sql = "INSERT INTO sensor_records (temperature, device) values ('".$temperature ."','".$device ."')";
    if($connection -> query($sql) === TRUE) {
        echo "New record created successfully";
    }
    else {
        echo "Error: ".$sql." ". $connection->error;
    }

    $connection->close();
?>