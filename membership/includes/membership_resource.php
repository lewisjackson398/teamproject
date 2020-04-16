<?php
// Include config file
require_once("config.php");


if(isset($_POST["submit"]))
{
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $membership_type = $_POST['membership_type'];
    $payment_type = $_POST['payment_type'];
    $payment_time = $_POST['payment_time'];
    $price = $_POST['price'];
    $membership_start = $_POST['membership_start'];
    $membership_end = $_POST['membership_end'];
    $user_id = $_POST['user_id'];
    
    $insert_member = "INSERT INTO tblmember (age, gender, membership_type, joining_date, end_of_membership_date, user_id) 
                        VALUES ('$age', '$gender', '$membership_type', '$membership_start', '$membership_end', '$user_id')";

    if(mysqli_query($link, $insert_member))
    {
        echo "Success! Your membership has started."; 
    }
    else
    {
        echo "Sorry, something must have gone wrong. Please try again later.";
    }

    $get_member_id = "SELECT member_id FROM tblmember WHERE user_id = '$user_id'";

    $result = mysqli_query($link, $get_member_id);

    $row = mysqli_fetch_array($result, MYSQLI_NUM);

    $member_id = $row[0];

    $insert_payment = "INSERT INTO tblpayment (member_id, type, amount, payment_time, payment_date) 
                        VALUES ('$member_id', '$payment_type', '$price', '$payment_time', '$membership_start')";

    if(mysqli_query($link, $insert_payment))
    {
        echo "Success! Your payment was approved.";
    }
    else
    {
        echo "Something was wrong with your payment. Please try again later." . mysqli_error($link);
    }

    mysqli_close($link);

    header("location: ../group/login.php");
}
?>