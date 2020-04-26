<?php
session_start();
//include('/XAMPP/htdocs/teamproject/server/config/config.php');
include('../../group/global/makeHeader.php');
include('../../group/global/makeNav.php');
echo makeHeader();
echo makeNav();

//add a user to a class.
if (isset($_POST['join'])) {
    // Collect the form input values and store them in variables

    $user_id = $_POST['user_id'];
    // use of explode 
    $class = $_POST['class'];
    //remove whitespace from a string
    // $stripped = str_replace(' ', '', $class);
    // echo $stripped ."<br>";
    //seperate each word by a comma into an array 
    $str_arr = explode(",", $class);
    //print_r($str_arr);

    //insert into the db a new class member
    //Only works for one word answers but might have to do. 
    $sql = "INSERT INTO tblclasses (date, class, instructor_name, start, finish, user_id)
    VALUES ('$str_arr[0]', '$str_arr[1]', '$str_arr[2]', '$str_arr[3]', '$str_arr[4]', '$user_id')";

    // Run the above query
    if (mysqli_query($link, $sql)) {
        echo "
        <body id='page-top' class='page page_schedule'>
            <div style='background:transparent !important; color: white;' class='jumbotron container text-center'>
                <h1 class='display-3'>Class Confirmation!</h1>
                <p class='lead'><strong>$_SESSION[username] has joined a class at MetroGym</strong><br> Please check the class details below are correct.</p>
                <hr>
                <p> $str_arr[0] - $str_arr[1] - $str_arr[2] - $str_arr[3] - $str_arr[4] </p>
                <p>
                Having trouble? <a href='../../group/contact.php'>Contact us</a>
                </p>
                <p class='lead'>
                <a class='btn btn-primary btn-sm' href='../../index.php' role='button'>Continue to homepage</a>
                </p>
            </div>
        </body>
        ";
    } else { 
        echo "
       
        <body id='page-top' class='page page_schedule'>
            <div style='background:transparent !important; color: white;' class='jumbotron container text-center'>
                <h1 class='display-3'>Sorry!</h1>
                <p class='lead'><strong>Something has gone wrong</strong><br> Please try again.</p>
                <hr>
                <p>
                If the problem still exists please contact us here.<a href='../../group/contact.php'> Contact us</a>
                </p>
                <p class='lead'>
                <a class='btn btn-primary btn-sm' href='../classes.php' role='button'>Continue back to classes</a>
                </p>
            </div>
        </body>
        ";
    }
}
include('../../group/global/makeScript.php');
include('../../group/global/makeFooter.php');
echo makeScript();
echo makeFooter();
?>