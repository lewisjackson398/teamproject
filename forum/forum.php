<?php
session_start();


// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) 
{
    echo "It looks like you're not logged in, please login.";
    header("location: ../group/login.php");
    exit;
}

// Initialize the session
//include('../group/global/makeHeader.php');
//echo makeHeader();
?>


<section class="forum">
        <div class="contasiner">
            <h2>Metro Gym Forum</h2>
            <p>Want to add to the discussion?</p>
        </div>
    </section>    

</div> 


<body id="page-top" class="page forum">
    <?php include('../group/global/makeNav.php');
    echo makeNav();
    ?>
  
<div id="content">
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
        $categories .="<a href='#' class = 'cat_links'>.$title. - <font size=' -1'></font>".$description."</a>";
    }
    echo $categories;
} else {
        echo "<p> Currently there are no categories are available. </p>";
    }
?> 




    
<?php
//include('../group/global/makeFooter.php');
//echo makeFooter();
?>

</body>    
<html>


    
    