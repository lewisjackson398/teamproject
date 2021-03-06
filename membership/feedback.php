<?php
session_start();

require_once('includes/feedback_resource.php');

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) 
{
    echo "It looks like you're not logged in, please login.";
    header("location: ../group/login.php");
    exit;
}

// Initialize the session
include('../group/global/makeHeader.php');
echo makeHeader();
?>

<body id="page-top" class="page feedback">
    <?php 
    include('../group/global/makeNav.php');
    echo makeNav();
    ?>
    <br><br>
    <section class="feedback_cont">
        <div class="container">
            <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Fill out this form to give feedback.</h1>
            <br></br>
            <form action="../membership/includes/feedback_resource.php" method="post">
                <div class="form-group">
                    <textarea maxlength="500" rows="4" cols="140" name="description" placeholder="Enter feedback here..."></textarea>
                </div>
                <div class="form-group">
                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'] ?>">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Submit" name="submit">
                </div>
            </form>
        </div>
    </section>
<?php
    include('../group/global/makeFooter.php');
    include('../group/global/makeScript.php');
    echo makeFooter();
    echo makeScript();
?>
</body>

