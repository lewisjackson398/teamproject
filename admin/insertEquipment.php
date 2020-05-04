<?php
// Include config file
require_once "../server/config/config.php";
include('../group/global/makeHeader.php');
echo makeHeader(); 

$status = "";
if(isset($_POST['submit']))
{
    $equipment_type =$_REQUEST['equipment_type'];
    $quantity = $_REQUEST['quantity'];

    
  $ins_query="INSERT INTO tblequipment (equipment_type, quantity) VALUES ('$equipment_type', '$quantity')";

    if(mysqli_query($link, $ins_query))
    {
        echo "successful";
    }
    else
    {
        echo "error: " . mysqli_error($link);
    }

}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Book Equipment</title>
<link rel="stylesheet" href="style.css" >
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
<p><a class="btn btn-default" href="classes.php">Back to Classes</a> 
| <a class="btn btn-default" href="viewEquipment.php">View Equipment</a> 
| <a class="btn btn-default" href="adminLogout.php">Logout</a></p>
<div>
<h1>Book Equipment</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="equipment_type" placeholder="Equipment type" required /></p>
<p><input type="text" name="quantity" placeholder="How many Required" required /></p> 


<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</section>
</body>
</html>
<?php
include('../group/global/makeFooter.php');
echo makeFooter();
?>