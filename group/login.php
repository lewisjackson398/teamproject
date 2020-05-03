<?php
require_once('includes/login_process.php');
include('global/makeHeader.php');
echo makeHeader();
?>

<body id="page-top" class="page login">
    <?php include('global/makeNav.php');
    echo makeNav();
    ?>
    <section class="login_cont">
        <div class="container">
            <h2>Login</h2>
            <p>Please fill in your credentials to login.</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" id="resize" value="<?php echo $username; ?>">
                    <span class="help-block"><?php echo $username_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <label>Password</label>
                    <input type="password" name="password" id="resize" class="form-control">
                    <span class="help-block"><?php echo $password_err; ?></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Login">
                </div>
                <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
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