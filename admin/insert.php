<?php
// Include config file
require_once "../server/config/config.php";
include('../group/global/makeHeader.php');
echo makeHeader(); 

$status = "";
if(isset($_POST['submit']))
{
    $class_id =$_REQUEST['class_id'];
    $user_id = $_REQUEST['user_id'];
    $date = $_REQUEST['date'];
    $class = $_REQUEST['class'];
    $start = $_REQUEST['start'];
    $finish = $_REQUEST['finish'];
    $instructor_name = $_REQUEST['instructor_name'];
    $timetable_id = $_REQUEST['timetable_id'];

    $ins_query="INSERT INTO tblclasses (class_id, user_id, date, class, start, finish, instructor_name, timetable_id) VALUES ($class_id, $user_id,'$date','$class','$start','$finish','$instructor_name', $timetable_id)";

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
<title>Insert New Record</title>
<link rel="stylesheet" href="style.css">
</head>
<body id="page-top" class="page admin">
<body>
<section class="admin">
     <div class="container">
     <div class ="row">
    <div style = "text-align: center;">

<a class="btn btn-default" href="classes.php">Back to Classes</a>
<a class="btn btn-default" href="view.php">View Records</a>
<a class="btn btn-default" href="adminLogout.php">Logout</a>
<div>
<h1>Insert New Record</h1>
<br>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="class_id" placeholder="Class Id" required /></p>
<p><input type="text" name="user_id" placeholder="User Id" required /></p>
<p><input type="text" name="date" placeholder="Date" required /></p>
<p><input type="text" name="class" placeholder ="Type of Class" required /></p>
<p><input type="text" name="start" placeholder ="Start time" required /></p>
<p><input type="text" name="finish" placeholder ="Finish time" required /></p>
<p><input type="text" name="instructor_name" placeholder ="Instructors Name" required /></p>
<p><input type="text" name="timetable_id" placeholder ="Timetable ID" required /></p>


<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#000000;"><?php echo $status; ?></p>
</div>
</div>
</section>
</body>
</html>

<?php
include('../group/global/makeFooter.php');
echo makeFooter();
?>