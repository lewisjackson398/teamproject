<?php
// Include config file
require_once("config.php");

// If the user selected yes on the form
if(isset($_POST["yes"]))
{
    // Query for deleting the member where to user_id is equal to the session user_id
    $delete_member = "DELETE FROM tblmember WHERE user_id = '$user_id'";

    // Run the above query
    if(mysqli_query($link, $delete_member))
    {
        deleteMembershipTrue();
        //Set the session variable to false as the user no longer has a membership
        $_SESSION['hasmembership'] = false;
    }
    else
    {
        deleteMembershipFalse();
    }
}
else
{
    //If the user did not select yes, then redirect to the login page where they will be redirected to the welcome page, if they are still logged in
    header("location: ../group/login.php");
}
    
?>

<script>
    function deleteMembershipTrue
    {
        alert("Your membership has been successfully deleted");
    }

    function deleteMembershipFalse
    {
        alert("Something went wrong deleting your membership, please try again later");
    }
</script>