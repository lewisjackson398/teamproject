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
                <h2>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to MetroGym.</h2>
            </div>
            <h1>Where would you like to go?</h1>
            <p>
                <div class="row">
                    <div class="col-md-6">
                        <h3>Account information</h3>
                        <a href="reset-password.php" class="btn btn-success btn-sm">Reset Your Password</a><br>
                        <a href="logout.php" class="btn btn-danger btn-sm">Sign Out of Your Account</a>
                    </div>

                    <div class="col-md-6">
                        <h3>Membership information</h3>
                        <a href="/teamproject/membership/update_membership.php" class="btn btn-success btn-md">Update membership</a><br>
                        <a href="/teamproject/membership/delete_membership.php" class="btn btn-danger btn-md">Delete membership</a><br>
                        <a href="/teamproject/membership/view_membership.php" class="btn btn-success btn-md">View membership</a><br>
                    </div>
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