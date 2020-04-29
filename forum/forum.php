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
<body id="page-top" class="page forum">
    <?php include('../group/global/makeNav.php');
    echo makeNav();
    ?>
    <br><br>
    <section class="forum_cont">
        <div class="container">
            <form action="register.php" method ="POST"> 
                Username: <input type="text" name="username">
                <br />Password: <input type ="Password" name="password"> 
                <br />Confirm password: <input type="password" name="repassword"> 
                <br />Email: <input type="text" name="email">
                <br /><input type="submit" name="submit" value="Register"> or <a href="..group/login.php">Login</a>
            </form>
        </div>
    </section>
</body>    
<html>

<?php
$username = @$_POST['username']; 
$password = @$_POST['password']; 
$repass = @$_POST['repassword']; 
$email = @$_POST['email']; 



                    <?php
                    include('../group/global/makeFooter.php');
                    echo makeFooter();
                    ?>
 