<?php
    include("C:/xampp/htdocs/sandrine_iot_assignment_version_2/public/connection.php");

    $temperature = $_POST["temperature"];
    $device = $_POST["device"];
    $query = "select * from sandrine_devices where name = '$device'";
    $result = mysqli_query($connection, $query) or die("Invalid query");

    function isDevicePresent($connection,$device,$result) {
        $output = false;
        if($result->num_rows > 0) {
            echo "The device is already present\n";
            $output = true;
        }
        else {
            echo "The device is not present\n";
            $output = false;
        }
        return $output;
    }

    

    function insertPostedData($temperature, $device,$connection,$result) {
        
        $output = isDevicePresent($connection,$device,$result);
        
        if(!$output) {
            $deviceQuery = "INSERT INTO sandrine_devices (name) values ('".$device ."')";
            if($connection -> query($deviceQuery) === TRUE) {
                echo "New device added successfully\n";
            }
            else {
                echo "Error: ".$deviceQuery." ". $connection->error;
            }
            $query = "select * from sandrine_devices where name = '$device'";
            $result = mysqli_query($connection, $query) or die("Invalid query");
            
        }
        
        foreach($result as $row) {
            $deviceId = $row['id'];
        }

        $temperatureQuery = "INSERT INTO sandrine_temperature_data (temperature,deviceId) values ('".
        $temperature."', '".$deviceId."') ";
        if($connection -> query($temperatureQuery) === TRUE) {
            echo "New record created successfully";
        }
        else {
            echo "Error: ".$device." ". $connection->error;
        }
    }

    insertPostedData($temperature,$device,$connection,$result);
    $connection->close();
?>