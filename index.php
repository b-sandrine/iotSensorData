<?php 
  $request = $_SERVER['REQUEST_URI'];
  switch($request) {
    case '/sandrine_iot_assignment_version_2/':
      require __DIR__ . '/views/home.php';
      break;
    case ' ':
      require __DIR__. '/views/home.php';
      break;
    case '/sandrine_iot_assignment_version_2/table':
      require __DIR__ . '/views/table.php';
      break;
    case '/sandrine_iot_assignment_version_2/chart':
      require __DIR__ . '/views/chart.php';
      break;
    default:
      require __DIR__ . '/sandrine_iot_assignment_version_2/views/404.php';
      break;
  }
?>