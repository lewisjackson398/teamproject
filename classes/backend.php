<?php

include('../server/config/config.php');

// Check if the user is logged in, if not then redirect him to login page

if (isset($_POST['join'])) {
    // Collect the form input values and store them in variables
    
    $class_names = $_POST["class_names"];
    $class_start = $_POST["class_start"];
    $class_end = $_POST["class_end"];
    $instructor_name = $_POST["instructor_name"];
    $user_id = $_POST["user_id"];

    echo $_POST['class_names'];
    echo $_POST['class_start'];
    echo $_POST['class_end'];
    echo $_POST['instructor_name'];
    echo $_POST['user_id'];

    $sql = "INSERT INTO tblclasses (class, start, finish, instructor_name, user_id)
    VALUES ('$class_names', '$class_start', '$class_end', '$instructor_name', '$user_id')";


    // Run the above query
    if (mysqli_query($link, $sql)) {
        echo "Your membership has been created.";
        echo "<br></br>";
    } else {
        echo "Sorry, something must have went wrong creating your membership, please try again later.";
        echo "<br></br>";
    }



    // if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    //     echo "It looks like you're not logged in, please login.";
    //     header("location: ../group/login.php");
    //     exit;
    // }

    // echo ("<script>console.log('PHP: " . $_POST['submit'] . 'it updated' .  "');</script>");


    // $update = mysqli_query($link, "INSERT INTO tblclasses(class, start, finish, instructor_name)
    //     VALUES ('$class_names', '$class_start', '$class_end', '$instructor_name')");
    // echo ("<script>console.log('PHP: " . $update . 'it updated' .  "');</script>");



    // if (isset($_POST['insufficient'])) {

    //     $delete = mysqli_query($link, " DELETE FROM tblclasses WHERE user_id = '$user_id' ");
    //     echo ("<script>console.log('PHP: " . $delete . ' it deleted' . "');</script>");
    // }
}
