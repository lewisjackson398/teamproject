<?php
//connect to db
include('/XAMPP/htdocs/teamproject/server/config/config.php');

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
    print_r($str_arr);

    //insert into the db a new class member
    //Only works for one word answers but might have to do. 
    $sql = "INSERT INTO tblclasses (date, class, instructor_name, start, finish, user_id)
    VALUES ('$str_arr[0]', '$str_arr[1]', '$str_arr[2]', '$str_arr[3]', '$str_arr[4]', '$user_id')";

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
    function test2() {
        location.replace("/teamproject/classes/classes.php");
    }
</script>