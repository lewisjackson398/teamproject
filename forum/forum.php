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
    <title>Forum Index </title>
</head>

<body id="page-top" class="page forum">
<?php include('../group/global/makeNav.php');
    echo makeNav();
?>
  
<section class="forum">
    <div class="text-center">
        <h1>Metro Gym Forum </h1>
        
    </div>
    <div class="container">
        <div class ="row">
            <div style = "text-align: center;">
                <p>Want to add to the discussion?</p>
                <br>
            </div>
        </div>
        
        <div class="row">
            <div id="content">
                <div style = "text-align: center;">
                    <?php
                    include('../server/config/config.php');
                    $sql = "SELECT * FROM tblcategories ORDER BY category_title ASC";
                    $result = mysqli_query($link, $sql) or die (mysqli_error(connection));
                    $categories =""; 
                    if (mysqli_num_rows($result) > 0){
                        while ($row = mysqli_fetch_assoc($result)){
                            $id = $row['id']; 
                            $title = $row['category_title'];
                            $description = $row['category_description']; 
                            $categories .="<a href='view_category.php?cid=".$id."' class = 'cat_links'>.$title. - <font size=' -1'></font>".$description."</a>";
                        }
                        echo $categories;
                    } else {
                            echo "<p> Currently there are no categories are available. </p>";
                        }
                    ?>
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


    
    