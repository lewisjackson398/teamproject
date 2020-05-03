<?php
// Include config file
require_once "../server/config/config.php";
include('../group/global/makeHeader.php');
echo makeHeader(); 
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Equipment</title>
<link rel="stylesheet" href="style.css">
</head>
<body id="page-top" class="page admin">
<?php include('../group/global/makeNav.php');
    echo makeNav();
?>
<body>
<section class="admin">
<div class="container">
     <div class ="row">
            <div style = "text-align: center;">
<div class="form">
<p><a class="btn btn-default" href="classes.php">Back to classes</a> 
| <a class="btn btn-default" href="insertEquipment.php">Book equipment</a> 
| <a class="btn btn-default" href="adminLogout.php">Logout</a></p>
<h2>View Booked Equipment</h2>
<br>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>equipment_type</strong></th>
<th><strong>quantity</strong></th>
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
    <a class="btn btn-link" href="deleteEquipment.php?equipment_type=<?php echo $row["equipment_type"]; ?>">Delete</a>
    </td>
    </tr>
    <?php 
} ?>
</tbody>
</table>
</div>
</section>
</body>
</html>
<?php
include('../group/global/makeFooter.php');
echo makeFooter();
?>