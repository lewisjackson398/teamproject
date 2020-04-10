<?php
session_start();
include('global/makeHeader.php');
echo makeHeader();


// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}


?>

<body id="page-top" class="page welcome">
    <?php include('global/makeNav.php');
    echo makeNav();
    ?>

    <section class="register_cont">
        <div class="container">
            <br><br>
            <div class="page-header">
                <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
            </div>
            <p>
                <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
                <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
            </p>
        </div>
    </section>
    <?php
    include('global/makeFooter.php');
    include('global/makeScript.php');
    echo makeFooter();
    echo makeScript();
    ?>

</body>