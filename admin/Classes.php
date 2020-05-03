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
<title>Classes</title>
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
           <p><strong>Welcome to the classes dashboard.</strong></p>
           <br>
           
           <p><a class="btn btn-default" href="admin.php">Home</a><p>
           <p><a class="btn btn-default" href="insert.php">Insert New Record</a></p>
           <p><a class="btn btn-default" href="view.php">View Records</a><p>
           <p><a class="btn btn-default" href="equipment.php">Book Equipment</a><p>
           <p><a class="btn btn-default" href="adminLogout.php">Logout</a></p>
     </div>
 </section>
</body>
</html>
<?php
include('../group/global/makeFooter.php');
echo makeFooter();
?>
    
