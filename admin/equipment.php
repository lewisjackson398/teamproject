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
<title>Equipment</title>
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
            <p><strong>Welcome to the equipment dashboard.</strong></p>
            <p><a class="btn btn-default" href="classes.php">Back to classes</a><p>
            <p><a class="btn btn-default"href="viewEquipment.php">View equipment booked</a></p>
            <p><a class="btn btn-default"href="insertEquipment.php">Book Equipment</a><p>
            <p><a class="btn btn-default"href="adminLogout.php">Logout</a></p>
       </div>
</section>
</body>
</html>
<?php
include('../group/global/makeFooter.php');
echo makeFooter();
?>
    
