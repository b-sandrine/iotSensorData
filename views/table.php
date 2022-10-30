<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Update records </title>
    <link rel="stylesheet" href="http://localhost/sandrine_iot_assignment_version_2/public/css/styles.css">
    <link rel="stylesheet" href="http://localhost/sandrine_iot_assignment_version_2/public/css/index.css">
</head>
<body onload="table();">
    <script type="text/javascript">
        function table() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("table").innerHTML = this.responseText;
            }
            xhttp.open("GET", "http://localhost/sandrine_iot_assignment_version_2/api/posttable.php");
            xhttp.send();
        }
        setInterval(() => {
            table();
        }, 1);
    </script>
   <header class="header">
  <a href="http://localhost/sandrine_iot_assignment_version_2/views/home.php" class="logo">Data</a>
  <nav class="nav-items">
    <a href="http://localhost/sandrine_iot_assignment_version_2/views/home.php">Home</a>
    <a href="http://localhost/sandrine_iot_assignment_version_2/views/chart.php">Chart</a>
    <a href="http://localhost/sandrine_iot_assignment_version_2/views/table.php">Table</a>
  </nav>
</header>

<div id="table" class="margin" style="margin-bottom: 3rem;"></div>

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