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

<!-- Header and post button --> 
<body id="page-top" class="page forum">
    <?php include('../group/global/makeNav.php');
    echo makeNav();
    ?>
    <section class="forum_post">
        <div class="contasiner">
           
            <h2>Metro Gym Forum</h2>
            <p>Want to add to the discussion?</p>
                <!-- <input onclick="()" type = "button" class="btn btn-success" value="create post" name="create post"> --- Might use might not--> 

                    <button class="btn btn-success" data-toggle="modal" data-target="#myModalNorm">
                        Create post
                    </button>


                
           
        </div>
    </section>
   
</body>    
<html>

    <?php
    include('../group/global/makeFooter.php');
    echo makeFooter();
    ?>
