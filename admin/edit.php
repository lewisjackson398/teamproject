<?php
// Include config file
require_once "../server/config/config.php";

$id=$_REQUEST['id'];
$query = "SELECT * from tblclasses where class_id='".$class_id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update class</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="classes.php">Dashboard</a> 
| <a href="insert.php">Insert New Record</a> 
| <a href="AdminLogout.php">Logout</a></p>
<h1>Update class</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
    $class_id =$_REQUEST['class_id'];
    $user_id = $_REQUEST['user_id'];
    $date = $_REQUEST['date'];
    $class = $_REQUEST['class'];
    $start = $_REQUEST['start'];
    $finish = $_REQUEST['finish'];
    $instructor_name = $_REQUEST['instructor_name'];
$update="update tblclasses class_id='".$class_id."',
name='".$name."', age='".$age.",',
submittedby='".$submittedby."' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="name" placeholder="Enter Name" 
required value="<?php echo $row['name'];?>" /></p>
<p><input type="text" name="age" placeholder="Enter Age" 
required value="<?php echo $row['age'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>