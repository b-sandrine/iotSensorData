<?php include("GetPost.php"); ?>
<table border=1 cellpadding = 10>
   <tr>
      <td>ID</td>
      <td>DATE ADDED</td>
      <td>TEMPERATURE</td>
      <td>DEVICES </td>
   </tr>
   <?php $i = 1;
    foreach($result as $row) : ?>
   <tr>
      <td><?php echo $i++?> </td>
      <td><?php echo $row["date"]?> </td>
      <td><?php echo $row["temperature"]?> </td>
      <td><?php echo $row["name"] ?> </td>
   </tr>
   <?php endforeach; ?>
</table>