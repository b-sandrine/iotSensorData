<?php include "C:/xampp/htdocs/sandrine_iot_assignment_version_2/api/GetPost.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>The home page</title>
	<link rel="stylesheet" href="http://localhost/sandrine_iot_assignment_version_2/public/css/index.css">
</head>
<body>
<header class="header">
  <a href="#" class="logo">Data</a>
  <nav class="nav-items">
    <a href="http://localhost/sandrine_iot_assignment_version_2/views/home.php">Home</a>
    <a href="http://localhost/sandrine_iot_assignment_version_2/views/chart.php">Chart</a>
    <a href="http://localhost/sandrine_iot_assignment_version_2/views/table.php">Table</a>
  </nav>
</header>
<main>
<div class="intro">
    <h1>Recent Sensor Data</h1>
    <p>This app displays sensor data</p>
    <button>Learn More</button>
  </div>
  <div class="achievements">
    <div class="work">
    <h1>Choose the device to show the graph</h1>
    <form action="#" method="post">
        <input type="submit" value="Go to Chart" name="submit" id="submit">
    </form>
	</div>
    
  </div>

</main>
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