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
        </div>
    </section>
        <div>
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">New Post</button>

                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content
                    <div class="form-group">
                        <label for="postTitleTitle">Post Title</label>
                        <input type="text" class="form-control" id="postTitle" placeholder="Post Title"/>
                    </div>
                    <div class="form-group">
                        <label for="postContent">Post Content</label>
                        <input type="textarea" class="form-control" id="postContent" placeholder="Enter Text"/>
                    </div>
                    -->
                    <form action="forum.php" method="POST">
                    <br />
                    Title: <br /><input type="text" name="post_title" style="width: 400px;"><br />                    
                    <br />
                    Content: <br/ >
                    <textarea style="resize: none; width: 400px; height 800px;" name ="content" "></textarea>
                    <br />

                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Submit">
                        <input type="reset" class="btn btn-default" value="Reset">
                    </div>
        </div>
    </section>           
    
<?php
include('../group/global/makeFooter.php');
echo makeFooter();
?>

</body>    
<html>

<?php
    $p_title = @$_POST['post_title'];
    $content = @$_POST['content'];
    $date = date("y-m-d");

    if(isset($_POST['submit'])){
        if($p_title && $content)
            if(stlen($p_title) >=5 && stlen($p_title) <= 70 ){
                if($query = mysql_query("INSERT INTO tblforum_posts('post_id', post_title, post_content, post_creator, 'date') VALUES('', '"$p_title."', '"$content."', '".$_SESSION["loggedin"]."'. '".$date."')"))
                echo "success";
            }
            else{echo"failure";}

                else {
                    echo "Post title must be between 5 and 70 characters long";
                }
            }
        }
        else{
                echo "Please fill in the fields"; 
        }
    
?> 

    