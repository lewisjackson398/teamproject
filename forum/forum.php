<?php
session_start();

//Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) 
{
    echo "It looks like you're not logged in, please login.";
    header("location: ../group/login.php");
    exit;
}

include('../group/global/makeHeader.php');
echo makeHeader();
?>

<body id="page-top" class="page forum">
    <?php include('../group/global/makeNav.php');
    echo makeNav();
    ?>
    <section class="forum_post">
        <div class="container">
            <h2>Forum</h2>
            <p>Post to add to the discussion.</p>
        </div>
    </section>
   
</body>    
<html>

    <?php
    include('../group/global/makeFooter.php');
    echo makeFooter();
    ?>
