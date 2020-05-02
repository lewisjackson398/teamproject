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
                <p>View Category</p>
                <br>
            </div>
        </div>
        <div class="row">
            <div id="content">
                <div style = "text-align: center;">
                    <?php
                        include_once("../forum/includes/config.php");
                        $cid = $_GET['cid'];

                        if (isset($_SESSION['loggedin'])){
                            $logged = " | <a href='create_topic.php?cid=".$cid."'>Click Here To Create A Topic</a>";
                        } else {
                            $logged = " | You must be logged in to create topics on this forum.";
                        }
                        $sql = "SELECT id FROM tblcategories WHERE id ='".$cid."' LIMIT 1";
                        $result = mysqli_query($link, $sql) or die (mysqli_error($link));
                        if (mysqli_num_rows($result) == 1){
                            $sql2 = "SELECT * FROM tbltopics WHERE category_id='".$cid."' ORDER BY topic_reply_date DESC";
                            $result2 = mysqli_query($link, $sql2) or die (mysqli_error($link)); 

                                                               // $topics = "";// -------------- Might be bad later on 

                            if (mysqli_num_rows($result2) > 0){
                                $tbltopics .= "<table width = 100%' style='border-collapse: collapse;'>";
                                $tbltopics .= "<tr><td colspan ='3'><a href='forum.php'>Return to Forum Index Page</a>".$logged."<hr /></td></tr>";
                                $tbltopics .= "<tr style='background-color: #dddddd;'><td>Topic Title</td><td width='65' align='center'>Replies</td>
                                <td width='65' align='center'>Views</td><tr>";
                                $tbltopics .= "<tr><td colspan='3'><hr /></td><tr>";
                                while ($row = mysqli_fetch_assoc($result2)) {
                                    $tid = $row['id'];
                                    $title = $row['topic_title'];
                                    $views = $row['topic_views'];
                                    $date = $row['topic_date'];
                                    $creator = $row['topic_creator'];
                                    $tbltopics .= "<tr><td><a href='view_topic.php?cid=".$cid."&tid=".$tid."'>".$title."</a><br /><span class='post_info'>Posted
                                    by: ".$creator." on ".$date."</span></td><td align='center'>0</td><td align='center'>".$views."</td></tr>";
                                    $tbltopics .= "<tr><td colspan='3'><hr /></td><tr>";
                                }
                                $tbltopics .= "</table>";
                                echo $tbltopics;
                            } else {
                                echo "<a href='forum.php'>Return To Forum Index Page</a><hr />";
                                echo "<p>No Topics exist in this category.".$logged."</p>";
                            }

                            } else {
                                echo "<a href='forum.php'>Return To Forum Index Page</a><hr />";
                                echo "<p>You are attempting to view a category that doesn't exist</p>";
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


    
    