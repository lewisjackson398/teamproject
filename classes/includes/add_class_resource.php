<?php
//connect to db
include('/XAMPP/htdocs/teamproject/server/config/config.php');

// Check if the user is logged in, if not then redirect him to login page
// if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
//     echo "It looks like you're not logged in, please login.";
//     header("location: ../group/login.php");
//     exit;
// }


//add a user to a class.
if (isset($_POST['join'])) {
    // Collect the form input values and store them in variables
    $date = $_POST["date"];
    $class_names = $_POST["class_names"];
    $class_start = $_POST["class_start"];
    $class_end = $_POST["class_end"];
    $instructor_name = $_POST["instructor_name"];
    $user_id = $_POST["user_id"];


    // echo $_POST['date'];
    // echo $_POST['class_names'];
    // echo $_POST['class_start'];
    // echo $_POST['class_end'];
    // echo $_POST['instructor_name'];
    // echo $_POST['user_id'] . "</br>";



    //insert into the db a new class member
    $sql = "INSERT INTO tblclasses (date, class, start, finish, instructor_name, user_id)
    VALUES ('$date', '$class_names', '$class_start', '$class_end', '$instructor_name', '$user_id')";

    // Run the above query
    if (mysqli_query($link, $sql)) {
        echo "You have been added to the class!";
        echo "<br></br>";
    } else {
        echo "Sorry, something must have went wrong adding you to a class, please try again later.";
        echo ("</br> Error description: " . $link->error . "</br>");
        echo "<br></br>";
    }
}

?>

<button onclick="test2()">OK</button>

<script>
    function test2()
    {
        location.replace("/teamproject/classes/classes.php");
    }
</script>