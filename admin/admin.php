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

    <h2>Instructions on how to use the admin dashboard</h2>
    <p> 1.If you require to reset your password, click on the button on this page which
    will redirect you to the reset password page, you can reset or cancel this function
    which will redirect you back to the admin homepage</p>
    <p>2. To add/amend or delete a class click the classes button</p>
    <p>3. Once you are into the classes page you can insert a new class. To be able to do 
    this the class must exist in the tbltimtable in phpmyadmin. The class ID can be random,
    however the Users ID must exist</p>
    <p>4. To amend a class, click the view classes, you can then choose to edit one. When 
    editing, you can only edit it to a class that exists in the tbltimtable in phpmyadmin</p>
    <p>5. To delete a class, open view classes you can then click delete and this will delete
    the class in that row and from the database</p>
    <p>6. To insert new equipment for a class when on the classes dashboard click book eqipment.
    once on book equipment you will be required to add the name of the equipment you want, and the
    quantity you require. Once you have clicked sumbit click view equipment.</p>
    <p>7. The new entry will not be included in the view, if you no longer require that equipment,
    you can then delete it by clicking on the delete button in the view timetable. This will delete
    the whole row</p>
    <p>8. You can go back to the classes homepage at anypoint by clicking home. You can then
    go back to the admin page</p>
    <p>9. Finally you can log out on any page, and must log out once you are finished using the admin 
    side</p>
</div>
</div>
</section>
</body>
</html>
<?php
include('../group/global/makeFooter.php');
echo makeFooter();
?>
