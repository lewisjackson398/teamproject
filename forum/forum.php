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

<body id="page-top" class="page forum">
    <?php include('../group/global/makeNav.php');
    echo makeNav();
    ?>
    <br><br>
    <section class="forum_cont">
        <div class="container">
            <form action="register.php" method ="POST"> 
                Username: <input type="text" name="username">
                <br />Password: <input type ="Password" name="username"> 
                <br />Confirm password: <input type="password" name="username"> 
                <br />Email: <input type="text" name="username">
                <br /><input type="submit" name="submit" value="Register"> or <a href="login.php">Login</a>
            </form>
        

        </div>
    </section>    



                    <?php
                    include('../group/global/makeFooter.php');
                    echo makeFooter();
                    ?>
 