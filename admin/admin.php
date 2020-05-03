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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<?php include('../group/global/makeNav.php');
    echo makeNav();
?>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. You are all logged in.</h1>
    </div>
    <p>
        <a href="adminReset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="adminLogout.php" class="btn btn-danger">Sign Out of Your Account</a>
        <a href="Classes.php" class="btn btn-danger">Classes</a>


    </p>

    <?php
include('../group/global/makeFooter.php');
echo makeFooter();
?>
</body>
</html>

