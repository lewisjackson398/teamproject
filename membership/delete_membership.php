<?php
session_start();

require_once('includes/delete_membership_resource.php');

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) 
{
    header("location: ../group/login.php");
    exit;
}

include('../group/global/makeHeader.php');
echo makeHeader();
?>

<body id="page-top" class="page membership">
    <?php 
    include('../group/global/makeNav.php');
    echo makeNav();
    ?>
    <br><br>
    <section class="membership_cont">
        <div class="container">

            <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Are you sure you want to delete your membership?.</h1>
            <br></br>
            <form action="../membership/includes/delete_membership_resource.php" method="post">
                <div class="form-group">
                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'] ?>">
                    <input type="submit" class="btn btn-danger" value="Yes" name="yes">
                    <input type="submit" class="btn btn-default" value="No" name="no">
                </div>
            </form>
        </div>
    </section>
<?php
    include('../group/global/makeFooter.php');
    echo makeFooter();
?>
</body>