<?php
// Include config file
require_once("config.php");


if(isset($_POST["submit"]))
{
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $membership_type = $_POST['membership_type'];
    $payment_type = $_POST['payment_type'];
    $price = $_POST['price'];
    $user_id = $_POST['user_id'];

    $update_member = "UPDATE tblmember 
                        SET age = '$age', gender = '$gender', membership_type = '$membership_type'
                            WHERE user_id = '$user_id'";

    if(mysqli_query($link, $update_member))
    {
        echo "Success! Your membership has been updated"; 
    }
    else
    {
        echo "Sorry, something must have gone wrong. Please try again later.";
    }

    $get_member_details = "SELECT member_id, end_of_membership_date FROM tblmember WHERE user_id = '$user_id'";

    $member_result = mysqli_query($link, $get_member_details);

    $member_rows = mysqli_fetch_array($member_result, MYSQLI_NUM);

    $member_id = $member_rows[0];

    $membership_end = $member_rows[1];

    $get_payment_details = "SELECT payment_time FROM tblpayment WHERE member_id = '$member_id'";

    $payment_result = mysqli_query($link, $get_payment_details);

    $payment_rows = mysqli_fetch_array($payment_result, MYSQLI_NUM);

    $payment_time = $payment_rows[0];

    $new_payment = "INSERT INTO tblpayment (member_id, type, amount, payment_time, payment_date)
                        VALUES ('$member_id', '$payment_type', '$price', '$payment_time', '$membership_end')";

    if(mysqli_query($link, $new_payment))
    {
        echo "Success! Your new payment details have been updated and you will be billed at the end of your current membership, for the package you selected.";
    }
    else
    {
        echo "Something was wrong with your payment. Please try again later." . mysqli_error($link);
    }

    mysqli_close($link);

    header("location: ../group/login.php");
}
?>