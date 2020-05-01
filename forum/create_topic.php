<?php
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) 
{
    echo "It looks like you're not logged in, please login.";
    header("location: ../group/login.php");
    exit();
}
if((!isset($_SESSION["loggedin"])) || ($_GET['cid'])){
    echo "It looks like you're not logged in, please login.";
    header("location: ../group/login.php");
    exit();
}
$cid = $_GET['cid'];

//Initialize the session
include('../group/global/makeHeader.php');
echo makeHeader();
?>

<head>
    <title>Create Topic </title>
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
                <p>Create Topic</p>
                <br>
            </div>
        </div>
        <div class="row">
            <div id="content">
                <div style = "text-align: center;">
                   <form action="create_topic_parse.php" method="post">
                        <p>Topic Title</p>
                        <input type="text" name="topic_title" size="98" maxlength="150" />
                        <p>Topic Content</p>
                        <textarea name="topic_content" rows="5" cols="75"></textarea>
                        <br /><br />
                        <input type="hidden" name="cid" value="<?php echo $cid;?>" />
                        <input type="submit" name="topic_submit" value="Create Your Topic" />
                    </form>
                </div>     
            </div>  
        </div>
    </div>       
</section>    

    
<?php
include('../group/global/makeFooter.php');
echo makeFooter();
?>

</body>    
<html>


    
    