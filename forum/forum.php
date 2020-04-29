<?php
session_start();

//require_once('includes/membership_resource.php');

// Check if the user is logged in, if not then redirect him to login page
//if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) 
//{
  //  echo "It looks like you're not logged in, please login.";
 //   header("location: ../group/login.php");
 //   exit;
//}

include('makeHeader.php');
echo makeHeader();
?>

<head>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body id="page-top" class="page forum">
    <?php include('makeNav.php');
    echo makeNav();
    ?>


    <div id="category_1"class="row forumModule forumMargin">
        <a href="#" onlick="showDiscussions(1); ">
            <div class = "col-lg-12 columnPad">
                <div class ="pullLeft" >
                    <h2>Category Name</h2> 
                </div>
                    <div class="pullRight"> 
                        <a id="startDiscussionButton_1" class="button" href="#" onclick="startDiscussion(1);"> Start Discussion </a>
                    </div>
                </div> 
            </div>     
        </a>
    </div>

    <div id="cat_discussions_1" class="row forumPad" style="display:none;">
        <div class="col-lg-12">
            <form>
                <div class="form-group">
                    Title
                    <input type="text" name="newDiscussionTitle" class ="form-control" size="40"></input>
                    <textarea class="newDiscussionText" name="newDiscussionText" rows="10"></textarea>
                </div>
            </form>
    </div>    

        
    <div id="cat_discussions_1" class="row forumPad" style="display:none;">
    <div class="col-lg-12">
        <table class ="forumTable">
            <thead>
                <tr>
                    <tr>
                        Discussion 
                    </tr>
                    <tr>
                        Author -- poster 
                    </tr>
                    <tr>
                        Replies -- Amount
                    </tr>
                </tr>
            </thead>
            <td>
                <a href="a"> Discussion name here </a>
            </td>
            <td>
                <a href="a"> Author Name </a>
            </td>
            <td>
                25
            </td>
        </table>
        </div>
    </div>
        <div class="row">
            <div class ="col-lg 12">
                <div class="forumPad pullRight" style="padding-right:15px;">
                    <a class="label label-primary" href="a">View More</a>
                </div>
            </div> 
        </div>   
    </div>    



   






</body> 

<script>
    function showDiscussions(cat_id){
    var html_id = "#cat_discussions_" + cat_id; 
    if($(html_id).css("display", "block") == 'block'){
        $(html_id).css("display", "none");
    }else{
        $(html_id).css("display", "block");
    }
}

function startDiscussion(cat_id){
    var html_id = "#cat_new_discussion_1" + cat_id;
    if($(html_id).css("display", "block") == 'block'){
        $(html_id).css("display", "none");
    }else{
        $(html_id).css("display", "block");
    }
}

</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.5.0.min.js"  integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="themes/default/js/forum_home.js" type="text/javascript"></script>

    <?php
    include('makeFooter.php');
    echo makeFooter();
    ?>
