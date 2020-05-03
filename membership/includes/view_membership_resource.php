<?php
// Include config file
require_once("config.php");

// Get the user_id from the session
$user_id = $_SESSION['user_id'];
    
// Get the member_id where the user_id is equal to the user_id of the session
$check_member = "SELECT member_id FROM tblmember WHERE user_id = '$user_id'";

// Store the above query in a variable
$check_member_result = mysqli_query($link, $check_member);
    
// If the number of rows equals zero, the user does not have a membership, redirect user
if(mysqli_num_rows($check_member_result) == 0)
{
    header("Refresh: 5; url= /teamproject/group/welcome.php");
    echo "It looks like you don't have a membership, redirecting you in 5 seconds";
    exit;
}
 
// Get the member details where the user_id is equal to the user_id of the session
$get_member = "SELECT * FROM tblmember WHERE user_id = '$user_id'";

// Store the above query in a variable
$member_result = mysqli_query($link, $get_member);
    
// Store the above variables in an array
$member_rows = mysqli_fetch_array($member_result);
    
// Close the database connection
mysqli_close($link);
?>
