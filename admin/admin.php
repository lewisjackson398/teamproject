<?php
// Initialize the session
session_start();


// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

include('../group/global/makeHeader.php');
echo makeHeader(); 
?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <br>
    <link rel="stylesheet" href="style.css">
    </style>
</head>
<body id="page-top" class="page admin">
<?php include('../group/global/makeNav.php');
    echo makeNav();
?>
<body>
<section class="admin">
<div class="container">
    <div class ="row">
            <div style = "text-align: center;">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. You are all logged in.</h1>
    
    <p>
        <a href="adminReset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="adminLogout.php" class="btn btn-danger">Sign Out of Your Account</a>
        <a href="Classes.php" class="btn btn-warning">Classes</a>
        </p>
</div>
</div>
</section>
</body>
</html>
<?php
include('../group/global/makeFooter.php');
echo makeFooter();
?>
