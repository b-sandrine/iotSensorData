<?php
    $servername = "localhost";
    $dbname = "benax_iot";
    $username = "benax_iot_root";
    $password = "Td(FAdeZ9xp3";

    $connection = new mysqli($servername,$username,$password,$dbname);
    if($connection->connect_error){
        die("Connection failed:".$connection->connect_error);
    }
    
?>