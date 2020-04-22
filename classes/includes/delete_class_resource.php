<?php
//get db connection
include('/XAMPP/htdocs/teamproject/server/config/config.php');
//delete a class if they are no longer going.
if (isset($_POST['delete'])) {
    // Collect the form input values and store them in variables

    $user_id = $_POST['user_id'];
    echo $user_id . "<br>";
    
    
    $class = $_POST['class'];
    $str_arr = explode(",", $class);
    print_r($str_arr);
    

    $get_class_id = "SELECT class_id FROM tblclasses WHERE user_id = '$user_id' & class_id = '$str_arr[0]'";
    echo $get_class_id . "<br>";

    $class_result = mysqli_query($link, $get_class_id);


    // Store the result above as an array
    $class_rows = mysqli_fetch_array($class_result, MYSQLI_NUM);

    // Store the first object in the array, which is the class_id, as a variable
    $class_id = $class_rows[0];
    echo $class_id . "<br>";

    $delete_class = "DELETE FROM tblclasses WHERE class_id = '$str_arr[0]'";
    echo $delete_class . "<br>";

    // Run the above query
    if (mysqli_query($link, $delete_class)) {
        echo "You have been deleted from the class!";
        echo "<br></br>";
    } else {
        echo "Sorry, something must have went wrong deleting you from a class, please try again later.";
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