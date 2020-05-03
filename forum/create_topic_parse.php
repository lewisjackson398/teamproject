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

if (isset($_POST['topic_submit'])) {
    if (($_POST['topic_title'] == "") && ($_POST['topic_content'] == "")){
        echo "You must fill in both fields to post a topic";
        exit();
    } else{
        include_once("../forum/includes/config.php");
        $cid = $_POST['cid'];
        $title = $_POST['topic_title'];
        $content = $_POST['topic_content'];
        $creator = $_SESSION['loggedin'];
        $sql = "INSERT INTO tbltopics (category_id, topic_title, topic_creator, topic_date, topic_reply_date) 
        VALUES ('".$cid."', '".$title."', '".$creator."', now(), now())";
        $result1 = mysqli_query($link, $sql) or die (mysqli_error($link));
        $new_topic_id = mysqli_insert_id($link);
        $sql2 = "INSERT INTO posts (category_id, topic_id, post_creator, post_content, post_date) 
        VALUES ('".$cid."', '".$new_topic_id."', '".$creator."', '".$content."', now())"; 
        $result2 = mysqli_query($link, $sql2) or die(mysqli_error($link));
        $sql3 = "UPDATE tblcategories SET last_post_date=now(), last_user_posted='".$creator."' WHERE id='".$cid."' LIMIT 1"; 
        $result3 = mysqli_query($link, $sql3) or die(mysqli_error($link));
        if (($result1) && ($result2) && ($result3)) {
            header("Location: view_topic.php?cid=".$cid."&tid=".$new_topic_id);             
        } else {
            echo "A problem occured when creating your topic. Please try again"; 
        }
    }
}


?>