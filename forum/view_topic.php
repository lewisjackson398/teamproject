<?php
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) 
{
    echo "It looks like you're not logged in, please login.";
    header("location: ../group/login.php");
    exit;
}

//Initialize the session
include('../group/global/makeHeader.php');
echo makeHeader();
?>

<head>
    <title>View Category </title>
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
                <p>View Topic</p>
                <br>
            </div>
        </div>
        <div class="row">
            <div id="content">
                <div style = "text-align: center;">
                    <?php
                        include_once("../forum/includes/config.php");
                        $tid = "";
                        $tid = $_GET['tid'];
                        $cid = $_GET['cid'];

                        //$tid = isset($_GET['tid']) ? $_GET['tid'] : '';
                        $sql = "SELECT * FROM tbltopics WHERE category_id='".$cid."' AND id='".$tid."' LIMIT 1";
                        $result = mysqli_query($link, $sql) or die (mysqli_error($link));
                        if(mysqli_num_rows($result) == 1) {
                            echo "<table width='100%'>";
                            if ($_SESSION['loggedin']) { echo "<tr><td colspan ='2'><input type='submit' value='Add Reply' onClick=\"window.location =
                                post_reply.php?cid=".$cid."$tid=".$tid."\" /><hr />"; } else {echo "<tr><td colspan='2'><p>Please log in to add reply</p><hr /></td></tr>";}
                                while ($row = mysqli_fetch_assoc($link, $result)){
                                    $sql2 = "SELECT * FROM posts WHERE category_id='".$cid."' AND topic_id='".$tid."'";
                                    $result2 = mysqli_query($link, $sql2) or die (mysqli_error($link));
                                    while ($row2 = mysqli_fetch_assoc($result2)){
                                        echo "<tr><td valign='top' style='border: 1px solid #000000;'><div style='min-height: 125px;'>".$row['topic_title']."<br /> align='center' 
                                        style='border: 1px solid #000000;'>User Info Here</td></tr><tr><td colspan='2'><hr /></td></tr>";
                                    }
                                }
                        } else {


                        }
                    ?>
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


    
    