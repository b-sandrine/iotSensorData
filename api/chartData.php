<?php
 
 include("C:/xampp/htdocs/sandrine_iot_assignment_version_2/public/connection.php");
 include("C:/xampp/htdocs/sandrine_iot_assignment_version_2/api/GetPost.php");
 

 $count = 0;
 $data = array();
 foreach($result as $row) {
	$data[$count]["label"] = $row["date"];
	$data[$count]["y"] = $row["temperature"];
	$count = $count +1;
 }

json_encode($data);
	
?>