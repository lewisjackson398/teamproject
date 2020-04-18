<?php
// Include config file
require_once("config.php");

// If the user clicked submit button on the form
if(isset($_POST["submit"]))
{
    // Store the form data in variables
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $membership_type = $_POST['membership_type'];
    $payment_type = $_POST['payment_type'];
    $price = $_POST['price'];
    $user_id = $_POST['user_id'];

    $check_member = "SELECT member_id FROM tblmember WHERE user_id = '$user_id'";
    $check_member_result = mysqli_query($link, $check_member);
    
    if(mysqli_num_rows($check_member_result) == 0)
    {
        header("Refresh: 5; url= /teamproject/group/welcome.php");
        echo "It looks like you don't have a membership to update, redirecting you in 5 seconds"; 
        exit;
    }

    // Query for updating the member table with the new values 
    $update_member = "UPDATE tblmember 
                        SET age = '$age', gender = '$gender', membership_type = '$membership_type'
                            WHERE user_id = '$user_id'";

    // Run the above query
    if(mysqli_query($link, $update_member))
    {
        echo "Your membership has been updated";
        echo "<br></br>";
    }
    else
    {
        echo "Something went wrong updating your membership, please try again later";
        echo "<br></br>";
    }

    // Query to get member details from the memebr table where the user_id is equal to the session user_id
    $get_member_details = "SELECT member_id, end_of_membership_date FROM tblmember WHERE user_id = '$user_id'";

    // Store the result of the query above in a variable
    $member_result = mysqli_query($link, $get_member_details);

    // Store the result above as an array
    $member_rows = mysqli_fetch_array($member_result, MYSQLI_NUM);

    // Store the first object in the array, which is the member_id, as a variable
    $member_id = $member_rows[0];

    // Store the second object in the array, which is the end of membership date, as a variable
    $membership_end = $member_rows[1];

    // Query for getting the payment time so the new payment can be made at the same time at the end of the membership month
    $get_payment_details = "SELECT payment_time FROM tblpayment WHERE member_id = '$member_id'";

    // Store the result of the above query as a variable
    $payment_result = mysqli_query($link, $get_payment_details);

    // Store the result above as an array
    $payment_rows = mysqli_fetch_array($payment_result, MYSQLI_NUM);

    // Store the first object in the array, which is the payment time, as a variable
    $payment_time = $payment_rows[0];

    // Query for inserting the new payment details and date of payment in the payment table
    $new_payment = "INSERT INTO tblpayment (member_id, type, amount, payment_time, payment_date)
                        VALUES ('$member_id', '$payment_type', '$price', '$payment_time', '$membership_end')";

    // Run the above query
    if(mysqli_query($link, $new_payment))
    {
        echo "Your new payment details have been added, you will be billed at the end of your current membership";
        echo "<br></br>";
    }
    else
    {
        echo "Something went wrong with your payment, please try again later";
        echo "<br></br>";
    }

    // Close the database connection
    mysqli_close($link);
}
?>

<button onclick="myFunction()">OK</button>

<script>
    function myFunction()
    {
        location.replace("/teamproject/group/welcome.php");
    }
</script>
