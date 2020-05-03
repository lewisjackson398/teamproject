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
<title>View classes</title>
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
<p><a class="btn btn-default" href="classes.php">Home</a> 
| <a class="btn btn-default" href="insert.php">Insert New Record</a> 
| <a class="btn btn-default" href="adminLogout.php">Logout</a></p>
<h2>View classes</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>class_id</strong></th>
<th><strong>user_id</strong></th>
<th><strong>date</strong></th>
<th><strong>class</strong></th>
<th><strong>start</strong></th>
<th><strong>finish</strong></th>
<th><strong>instructor_name</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;

$sel_query="SELECT * FROM tblclasses ORDER BY class_id";
$result = mysqli_query($link, $sel_query);

while($row = mysqli_fetch_assoc($result)) 
{ ?>
    <tr>
    <td allign="center"><?php echo $row["class_id"]; ?></td>
    <td allign="center"><?php echo $row["user_id"]; ?></td>
    <td allign="center"><?php echo $row["date"]; ?></td>
    <td allign="center"><?php echo $row["class"]; ?></td>
    <td allign="center"><?php echo $row["start"]; ?></td>
    <td allign="center"><?php echo $row["finish"]; ?></td>
    <td allign="center"><?php echo $row["instructor_name"]; ?></td>
    <td allign="center">
    <a class="btn btn-link" href="edit.php?class_id=<?php echo $row["class_id"]; ?>">Edit</a>
    </td>
    <td allign="center">
    <a class="btn btn-link" href="delete.php?class_id=<?php echo $row["class_id"]; ?>">Delete</a>
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