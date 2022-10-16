<?php include("../api/chartData.php") ?>
<!DOCTYPE HTML>
<html>
<head>
<title> Home page </title>
<link rel="stylesheet" href="../public/css/index.css">
<link rel="stylesheet" href="../public/css/styles.css">
</head>

<body onload="chart();">
<script>

window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title: {
		text: "Recent Temperature Records"
	},
	axisY: {
		title: "Temperature"
	},
	data: [{
		type: "column",
		dataPoints: <?php echo json_encode($data, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}

function chart() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("chartCOntainer").innerHTML = this.responseText;
            }
            xhttp.open("GET", "../api/chartData.php");
            xhttp.send();
        }
        setInterval(() => {
            chart();
        }, 1);

</script>
<header class="header">
  <a href="http://localhost/embedded-systems-assignment/" class="logo">Data</a>
  <nav class="nav-items">
    <a href="http://localhost/embedded-systems-assignment/">Home</a>
    <a href="http://localhost/embedded-systems-assignment/Views/chart.php">Chart</a>
    <a href="http://localhost/embedded-systems-assignment/table.php">Table</a>
  </nav>
</header>


<div id="chartContainer" style="height: 370px; width: 100%;margin-bottom: 3rem;margin-top: 3rem;"></div>


<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<footer class="footer">
  <div class="copy">&copy; 2022 Data</div>
  <div class="bottom-links">
    <div class="links">
      <span>More Info</span>
      <a href="http://localhost/embedded-systems-assignment">Home</a>
    <a href="http://localhost/embedded-systems-assignment/Views/chart.php">Chart</a>
    <a href="http://localhost/embedded-systems-assignment/table.php">Table</a>
    </div>
    
  </div>
</footer>
</body>
</html>       