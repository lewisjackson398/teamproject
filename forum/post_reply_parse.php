<?php
session_start();

// Check if the user is logged in, if not then redirect him to login page
//if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) 

   
	if (isset($_POST['reply_submit'])) {
		include_once("../forum/includes/config.php");
		$creator = $_SESSION['loggedin'];
		$cid = $_POST['cid'];
		$tid = $_POST['tid'];
		$reply_content = $_POST['reply_content'];
		$sql = "INSERT INTO posts (category_id, topic_id, post_creator, post_content, post_date) VALUES ('".$cid."', '".$tid."', '".$creator."', '".$reply_content."', now())";
		$result = mysqli_query($link, $sql) or die (mysqli_error($link));
		$sql2 = "UPDATE tblcategories SET last_post_date=now(), last_user_posted='".$creator."' WHERE id='".$cid."' LIMIT 1";
		$result2 = mysqli_query($link, $sql2) or die (mysqli_error($link));
		$sql3 = "UPDATE tbltopics SET topic_reply_date=now(), topic_last_user='".$creator."' WHERE id ='".$tid."' LIMIT 1";
		$result3 = mysqli_query($link, $sql3) or die(mysqli_error($link));
		
		if (($result) && ($result2) && ($result3)) {
			echo "<p>Your reply has been successfuly posted. <a href='view_topic.php?cid=".$cid."&tid=".$tid."'>Click here to return to the previous page.</a></p>";
			} else {
				echo "<p>An issue occured posting your reply. Try again later.</p>";
			}
			
			} else {
				exit();
			}
        

?>
