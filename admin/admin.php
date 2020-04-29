<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
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
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="adminReset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="adminLogout.php" class="btn btn-danger">Sign Out of Your Account</a>
        <a href="addClass.php" class="btn btn-danger">Add a Class</a>
        <a href="updateClass.php" class="btn btn-danger">Update a class</a>
        <a href="deleteClass.php" class="btn btn-danger">Delete a class</a>
        
    </p>
</body>
</html>