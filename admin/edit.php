<?php
// Include config file
require_once "../server/config/config.php";
include('../group/global/makeHeader.php');
echo makeHeader(); 
?>

$class_id = $_GET['class_id'];
$query = "SELECT * FROM tblclasses WHERE class_id = '$class_id'"; 
$result = mysqli_query($link, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update class</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<?php include('../group/global/makeNav.php');
    echo makeNav();
?>
<body>
<div class="form">
<p>
    <a href="classes.php">Dashboard</a> 
    <a href="insert.php">Insert New Record</a> 
    <a href="AdminLogout.php">Logout</a>
</p>
<h1>Update class</h1>
<?php
$status = "";

if(isset($_POST['submit'])) 
{
    $class_id = $_POST['class_id'];
    $user_id = $_POST['user_id'];
    $date = $_POST['date'];
    $class = $_POST['class'];
    $start = $_POST['start'];
    $finish = $_POST['finish'];
    $instructor_name = $_POST['instructor_name'];

    $update = "UPDATE tblclasses SET
                class_id = $class_id,
                user_id = $user_id, 
                date = '$date',
                class = '$class', 
                start = '$start', 
                finish = '$finish', 
                instructor_name = '$instructor_name' 
                WHERE class_id = '$class_id'";

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
    echo "<a href='view.php'>View Updated class</a>";
    //echo '<p style="color:#FF0000;">'.$status.'</p>';
}
else 
{
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="class_id" placeholder="Enter class_id" 
required value="<?php echo $row["class_id"];?>" /></p>
<p><input type="text" name="user_id" placeholder="Enter user_id" 
required value="<?php echo $row["user_id"];?>" /></p>
<p><input type="text" name="date" placeholder="Enter date" 
required value="<?php echo $row["date"];?>" /></p>
<p><input type="text" name="class" placeholder="Enter class" 
required value="<?php echo $row["class"];?>" /></p>
<p><input type="text" name="start" placeholder="Enter start time" 
required value="<?php echo $row["start"];?>" /></p>
<p><input type="text" name="finish" placeholder="Enter finish time" 
required value="<?php echo $row["finish"];?>" /></p>
<p><input type="text" name="instructor_name" placeholder="Enter instructor name" 
required value="<?php echo $row["instructor_name"];?>" /></p>

<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
<?php
include('../group/global/makeFooter.php');
echo makeFooter();
?>
</body>
</html>