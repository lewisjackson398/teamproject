
<?php
// Include config file
require_once "../server/config/config.php";
$class_id=$_REQUEST['class_id'];
$query = "DELETE FROM tblclasses WHERE class_id=$class_id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: view.php"); 
?>