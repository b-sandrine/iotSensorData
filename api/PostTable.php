<?php include("GetPost.php"); ?>
<table border=1 cellpadding = 10>
   <tr>
      <td>ID</td>
      <td>DEVICE</td>
      <td>TEMPERATURE</td>
      <td>DATE</td>
   </tr>
   <?php $i = 1;
    foreach($result as $row) : ?>
   <tr>
      <td><?php echo $i++?> </td>
      <td><?php echo $row["device"]?> </td>
      <td><?php echo $row["Temperature"]?> </td>
      <td><?php echo $row["timestamp"]?> </td>
   </tr>
   <?php endforeach; ?>
</table>