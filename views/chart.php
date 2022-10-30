<?php include("C:/xampp/htdocs/sandrine_iot_assignment_version_2/api/chartData.php") ?>
<!DOCTYPE HTML>
<html>
<head>
<title> Home page </title>
<link rel="stylesheet" href="http://localhost/sandrine_iot_assignment_version_2/public/css/index.css">
<link rel="stylesheet" href="http://localhost/sandrine_iot_assignment_version_2/public/css/styles.css">
</head>

<body onload="chart();">
<script type="text/javascript">

window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title: {
		text: "Recent Temperature Records"
	},
	axisY: {
		title: "Temperature",
    suffix: ' \u00B0C'
	},
  axisX: {
    valueFormatString: "DD MMM",
    crosshair: {
      enabled: true,
      snapToDataPoint: true
    }
  },

	data: [{
		type: "spline",
    marketSize: 5,
    xValueFormatString: "YYYY",
    xValueType: "dateTime",
		dataPoints: <?php echo json_encode($data, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
}

function chart() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("chartCOntainer").innerHTML = this.responseText;
                console.log(this.responseText)
            }
            xhttp.open("GET", "http://localhost/sandrine_iot_assignment_version_2//api/chartData.php");
            xhttp.send();
}

setTimeout(() => {
  chart();
}, 1000);

</script>
<header class="header">
  <a href="http://localhost/sandrine_iot_assignment_version_2/views/home.php" class="logo">Data</a>
  <nav class="nav-items">
    <a href="http://localhost/sandrine_iot_assignment_version_2/views/home.php">Home</a>
    <a href="http://localhost/sandrine_iot_assignment_version_2/views/chart.php">Chart</a>
    <a href="http://localhost/sandrine_iot_assignment_version_2/views/table.php">Table</a>
  </nav>
</header>

<form action="" method="post" class="work">
        <select name="name">
            <option value="">Select device</option>
            <?php
            include "../public/connection.php";
                $selectDeviceQuery = "SELECT * FROM sandrine_devices";
                $resultDeviceQuery = mysqli_query($connection, $selectDeviceQuery);
                
                    foreach($resultDeviceQuery as $row) {
                        $name = $row["name"];
            ?>

            <option value="<?php echo $name; ?>"><?php echo $name; ?></option>
            
            <?php
                } 
            ?>
        </select>
        <input type="submit" value="Go to Chart" name="submit" id="submit">
    </form>
<div id="chartContainer" style="height: 370px; width: 100%;margin-bottom: 3rem;margin-top: 3rem;"></div>


<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<footer class="footer">
  <div class="copy">&copy; 2022 Data</div>
  <div class="bottom-links">
    <div class="links">
      <span>More Info</span>
      <a href="http://localhost/sandrine_iot_assignment_version_2/views/home.php">Home</a>
    <a href="http://localhost/sandrine_iot_assignment_version_2/views/chart.php">Chart</a>
    <a href="http://localhost/sandrine_iot_assignment_version_2/views/table.php">Table</a>
    </div>
    
  </div>
</footer>
</body>
</html>       