<?php
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) 
{
    echo "It looks like you're not logged in, please login.";
    header("location: ../group/login.php");
    exit();
}

$cid = $_GET['cid'];
$tid = $_GET['tid'];

//Initialize the session
include('../group/global/makeHeader.php');
echo makeHeader();
?>

<head>
    <title>Post Forum Reply </title>
</head>

<body id="page-top" class="page forum">
<?php include('../group/global/makeNav.php');
    echo makeNav();
?>
  
<section class="forum">
    <div class="text-center">
        <h1>Metro Gym Forum</h1>
        
    </div>
    <div class="container">
        <div class ="row">
            <div style = "text-align: center;">
                <p>Reply to Topic</p>
                <br>
            </div>
        </div>
        <div class="row">
            <div id="content">
                <div style = "text-align: center;">
                   <form action="post_reply_parse.php" method="post">
                    <p>Reply Content</p>
                    <textarea name="reply_content" rows ="5" cols="75"></textarea>
                    <br /><br />
                    <input type="hidden" name="cid" value="<?php echo $cid; ?>" /> 
                    <input type="hidden" name="tid" value="<?php echo $tid; ?>" /> 
                    <input type="submit" name="reply_submit" value="Post Your Reply" /> 
                   </form>
                </div>     
            </div>  
        </div>
    </div>       
</section>    

    
<?php
include('../group/global/makeFooter.php');
include('../group/global/makeScript.php');

echo makeFooter();
echo makeScript();
?>

</body>    
<html>


    
    