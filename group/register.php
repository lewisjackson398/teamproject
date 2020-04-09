<?php
require_once('includes/register_resource.php');
include('global/makeHeader.php');
echo makeHeader();
?>

<body id="page-top" class="page register">
    <?php include('global/makeNav.php');
    echo makeNav();
    ?>
    <section class="register_cont">
        <div class="container">
            <h2>Sign Up</h2>
            <p>Please fill this form to create an account.</p>
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
                <div class="form-group <?php echo (!empty($address_erorr)) ? 'has-error' : ''; ?>">
                    <label>Email Address</label>
                    <input type="email" name="address" class="form-control" value="<?php echo $address; ?>">
                    <span class="help-block"><?php echo $address_erorr; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                    <span class="help-block"><?php echo $username_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                    <span class="help-block"><?php echo $password_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                    <span class="help-block"><?php echo $confirm_password_err; ?></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <input type="reset" class="btn btn-default" value="Reset">
                </div>
                <p>Already have an account? <a href="login.php">Login here</a>.</p>
            </form>
        </div>
    </section>
    <?php
    include('global/makeFooter.php');
    include('global/makeScript.php');
    echo makeFooter();
    echo makeScript();
    ?>
</body>