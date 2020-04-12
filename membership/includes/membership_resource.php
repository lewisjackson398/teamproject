<?php
// Include config file
require_once "../server/config/config.php";

if(isset($_POST['submit']))
{

    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $payment_type = $_POST['payment_type'];
    $payment_time = $_POST['payment_time'];
    $price = $_POST['price'];
    $membership_start = $_POST['membership_start'];
    $membership_end = $_POST['membership_end'];
    $user_id = $_SESSION['user_id'];

    $member_query = "INSERT INTO 'tblmember' ('age', 'gender', 'joining_date', 'end_of_membership_date', 'user_id') VALUES ('$age', '$gender', '$membership_start', '$membership_end', '$user_id')";

    mysqli_query($link, $member_query);

    $get_memberid = "SELECT 'member_id' FROM 'tblmember' WHERE 'user_id' = $user_id";

    $member_id = mysqli_query($link, $get_memberid);

    $payment_query = "INSERT INTO 'tblpayment' ('member_id', 'type', 'amount', 'payment_time', 'payment_date') VALUES ('$member_id', '$payment_type', '$price', '$payment_time', '$membership_start')";

    mysqli_query($link, $payment_query);
}



?>