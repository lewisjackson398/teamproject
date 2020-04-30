<?php
session_start();

//require_once('includes/membership_resource.php');

// Check if the user is logged in, if not then redirect him to login page
//if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) 
//{
//    echo "It looks like you're not logged in, please login.";
//    header("location: ../group/login.php");
//    exit;
//}

include('../group/global/makeHeader.php');
echo makeHeader();
?>

<html>
    <head>
    <tiitle>Forum</title>
    </head> 



<body id="page-top" class="page forum">
    <?php include('../group/global/makeNav.php');
    echo makeNav();
    ?>

   

   
</body>    
<html>



        <?php
        include('../group/global/makeFooter.php');
        echo makeFooter();
        ?>
