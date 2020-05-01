<?php
session_start();

require_once('includes/membership_resource.php');

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) 
{
    echo "It looks like you're not logged in, please login.";
    header("location: ../group/login.php");
    exit;
}

// Initialize the session
include('../group/global/makeHeader.php');
echo makeHeader();
?>


<!-- Header and post button --> 
<body id="page-top" class="page forum">
    <?php include('../group/global/makeNav.php');
    echo makeNav();
    ?>
    <section class="forum_post">
        <div class="contasiner">
            <h2>Metro Gym Forum</h2>
            <p>Want to add to the discussion?</p>
        </div>
    </section>    


<div id="content">
<?php
include('../server/config/config.php')
$sql = "SELECT * FROM categories ORDER BY category_title ASC";
$res = mysql_query($sql) or die(mysql_error());
if (mysql_rows($res) > 0){
    }   else {
        echo "<p> Currently there are no categories are available. </p>";
    }

    
}
?> 
</div> 

    
<?php
include('../group/global/makeFooter.php');
echo makeFooter();
?>

</body>    
<html>


    
    