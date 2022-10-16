<?php
 
 include("../public/connection.php");
 include("../api/GetPost.php");
 
 $count = 0;
 $data = array();
 foreach($result as $row) {
	$data[$count]["label"] = $row["device"];
	$data[$count]["y"] = $row["Temperature"];
	$count = $count +1;
 }

json_encode($data, JSON_NUMERIC_CHECK);
	
?>