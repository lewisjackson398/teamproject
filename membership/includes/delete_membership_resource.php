<?php
// Include config file
require_once("config.php");

// If the user selected yes on the form
if(isset($_POST["yes"]))
{
    $user_id = $_POST['user_id'];

    $check_member = "SELECT member_id FROM tblmember WHERE user_id = '$user_id'";
    $check_member_result = mysqli_query($link, $check_member);
    
    if(mysqli_num_rows($check_member_result) == 0)
    {
        header("Refresh: 5; url= /teamproject/group/welcome.php");
        echo "It looks like you don't have a membership to delete, redirecting you in 5 seconds";
        exit;
    }

    $get_member_details = "SELECT member_id FROM tblmember WHERE user_id = '$user_id'";

    $member_result = mysqli_query($link, $get_member_details);

    // Store the result above as an array
    $member_rows = mysqli_fetch_array($member_result, MYSQLI_NUM);

    // Store the first object in the array, which is the member_id, as a variable
    $member_id = $member_rows[0];

    $delete_payment = "DELETE FROM tblpayment WHERE member_id = '$member_id'";

    if(mysqli_query($link, $delete_payment))
    {
        echo "Your payments have successfully been deleted, any payments that were upcoming will not be removed from your account";
        echo "<br></br>";
    }
    else
    {
        echo "Something went wrong when removeing your payments, please try again later";
        echo "<br></br>";
    }

    // Query for deleting the member where to user_id is equal to the session user_id
    $delete_member = "DELETE FROM tblmember WHERE user_id = '$user_id'";

    // Run the above query
    if(mysqli_query($link, $delete_member))
    {
        echo "Your membership has successfully been deleted, you may start another membership whenever you feel like it.";
        echo "<br></br>";
        $_SESSION['membership'] = false;
    }
    else
    {
        echo "Something went wrong with deleting your membership, please try again later";
        echo "<br></br>";
    }

    mysqli_close($link);

}
else
if(isset($_POST['no']))
{
    header("location: /teamproject/group/welcome.php");
}
?>

<button onclick="myFunction()">OK</button>

<script>
    function myFunction()
    {
        location.replace("/teamproject/group/welcome.php");
    }
</script>
