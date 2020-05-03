<?php
// Include config file
require_once "../server/config/config.php";
include('../group/global/makeHeader.php');
echo makeHeader(); 

$equipment_type = $_GET['equipment_type'];
$query = "SELECT * FROM tblequipment WHERE equipment_type = '$equipment_type'"; 
$result = mysqli_query($link, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Equipment List</title>
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
<p>
    <a class="btn btn-default" href="admin.php">Back to home</a> 
    <a class="btn btn-default" href="classes.php">Back to Classes</a> 
    <a class="btn btn-default" href="insertEquipment.php">Insert New Equipment</a> 
    <a class="btn btn-default" href="AdminLogout.php">Logout</a>
</p>
<h1>Update Equipment List</h1>
<br>
<?php
$status = "";

if(isset($_POST['submit'])) 
{
    $equipment_type = $_POST['equipment_type'];
    $quantity = $_POST['quantity'];


    $update = "UPDATE tblequipment SET
                equipment_type = $equipment_type,
                quantity = $quantity,  
                WHERE equipment_type = '$equipment_type'";

    if(mysqli_query($link, $update))
    {
        "successful";
    }
    else
    {
        "error: " . mysqli_error($link);
    } 
    //or die(mysqli_error());
    //$status = "Record Updated Successfully. </br></br>
    echo "<a href='viewEquipment.php' class='btn btn-default'>View Updated Equipment List</a>";
    //echo '<p style="color:#FF0000;">'.$status.'</p>';
}
else 
{
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value= "<?php echo $row['id'];?>" />
<p><input type="text" name="equipment_type" placeholder="Enter Equipment Type" 
required value="<?php echo $row["equipment_type"];?>" /></p>
<p><input type="text" name="quantity" placeholder="Enter Quantity" 
required value="<?php echo $row["quantity"];?>" /></p>


<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</section>
</body>
</html>
<?php
include('../group/global/makeFooter.php');
echo makeFooter();
?>