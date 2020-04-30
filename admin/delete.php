
<?php
// Include config file
require_once "../server/config/config.php";
$class_id = $_GET['class_id'];
$query = "DELETE FROM tblclasses WHERE class_id = '$class_id'"; 
$result = mysqli_query($link, $query) or die ( mysqli_error());
header("Location: view.php"); 
?>