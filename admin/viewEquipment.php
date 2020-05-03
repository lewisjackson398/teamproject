<?php
// Include config file
require_once "../server/config/config.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Equipment</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="classes.php">Back to classes</a> 
| <a href="insertEquipment.php">Book equipment</a> 
| <a href="adminLogout.php">Logout</a></p>
<h2>View Booked Equipment</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>equipment_type</strong></th>
<th><strong>quantity</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;

$sel_query="SELECT * FROM tblequipment ORDER BY equipment_type";
$result = mysqli_query($link, $sel_query);

while($row = mysqli_fetch_assoc($result)) 
{ ?>
    <tr>
    <td allign="center"><?php echo $row["equipment_type"]; ?></td>
    <td allign="center"><?php echo $row["quantity"]; ?></td>
    <td allign="center">
    <a href="editEquipment.php?equipment_type=<?php echo $row["equipment_type"]; ?>">Edit</a>
    </td>
    <td allign="center">
    <a href="deleteEquipment.php?equipment_type=<?php echo $row["equipment_type"]; ?>">Delete</a>
    </td>
    </tr>
    <?php 
} ?>
</tbody>
</table>
</div>
</body>
</html>