<?php
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../group/login.php");
    exit;
}

// Initialize the session
require_once('includes/membership_resource.php');
include('../group/global/makeHeader.php');
echo makeHeader();
?>

<body id="page-top" class="page membership">
    <?php include('../group/global/makeNav.php');
    echo makeNav();
    ?>
    <br><br>
    <section class="membership_cont">
        <div class="container">

            <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]) ; ?></b>. Fill out this form to start a membership.</h1>
            <br></br>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group <?php echo (!empty($name_error)) ? 'has-error' : ''; ?>">
                    <label>Name</label>
                    <input type="text" name="complete_name" class="form-control" value="<?php echo $name; ?>">
                    <span class="help-block"><?php echo $name_error; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($contact_erorr)) ? 'has-error' : ''; ?>">
                    <label>Contact</label>
                    <input type="text" name="contact" class="form-control" value="<?php echo $contact; ?>">
                    <span class="help-block"><?php echo $contact_erorr; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($memembership_type_err)) ? 'has-error' : ''; ?>"">
                    <label>Membership Type</label>
                    <select type="membership_type" name="membership_type" class="form-control" value="<?php echo $membership_type; ?>">
                        <option value="bronze">Bronze</option>
                        <option value="silver">Silver</option>
                        <option value="gold">Gold</option>
                    </select>
                    <span class="help-block"><?php echo $membership_type_err; ?></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <input type="reset" class="btn btn-default" value="Reset">
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