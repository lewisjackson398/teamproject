<?php
// Include config file
require_once("config.php");

// If the user clicked submit on the form
if(isset($_POST["submit"]))
{
    // Collect the form input values and store them in variables
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $membership_type = $_POST['membership_type'];
    $payment_type = $_POST['payment_type'];
    $payment_time = $_POST['payment_time'];
    $price = $_POST['price'];
    $membership_start = $_POST['membership_start'];
    $membership_end = $_POST['membership_end'];
    $user_id = $_POST['user_id'];
    
    // Query for inserting the form data into the member table
    $insert_member = "INSERT INTO tblmember (age, gender, membership_type, joining_date, end_of_membership_date, user_id) 
                        VALUES ('$age', '$gender', '$membership_type', '$membership_start', '$membership_end', '$user_id')";

    // Run the above query
    if(mysqli_query($link, $insert_member))
    {
        membershipTrue(); 
    }
    else
    {
        membershipFalse();
    }

    // Query for getting the member id now that the user is in the member table where the user_id in the database is equal to the user_id from the session variable
    $get_member_id = "SELECT member_id FROM tblmember WHERE user_id = '$user_id'";

    // Run the above query
    $result = mysqli_query($link, $get_member_id);

    // For each result, store it as an array
    $row = mysqli_fetch_array($result, MYSQLI_NUM);

    // Only one value returned which is the member_id, store it in the $member_id variable
    $member_id = $row[0];

    // Query for inserting the rest of the form data into the payment table with the correct member_id, which was retrieved above
    $insert_payment = "INSERT INTO tblpayment (member_id, type, amount, payment_time, payment_date) 
                        VALUES ('$member_id', '$payment_type', '$price', '$payment_time', '$membership_start')";

    // Run the above query
    if(mysqli_query($link, $insert_payment))
    {
        paymentTrue();
    }
    else
    {
        paymentFalse();
    }

    // Close the database connection
    mysqli_close($link);

    // Redirect to the login page, which will redirect to the welcome page if the user is still logged in
    header("location: ../group/login.php");
}
?>

<script>
    function membershipTrue()
    {
        alert("Your membership has been created");
    }

    function membershipFalse()
    {
        alert("Something went wrong with creating your membership, please try again later");
    }

    function paymentTrue()
    {
        alert("Your payment has came through");
    }

    function paymentFalse()
    {
        alert("Something has went wrong with your payment, please try again later");
    }
</script>