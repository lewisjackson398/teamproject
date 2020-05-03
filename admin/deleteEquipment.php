<?php
// Include config file
require_once "../server/config/config.php";
$equipment_type = $_GET['equipment_type'];
$query = "DELETE FROM tblequipment WHERE equipment_type = '$equipment_type'"; 
$result = mysqli_query($link, $query) or die ( mysqli_error());
header("Location: viewEquipment.php"); 
?>