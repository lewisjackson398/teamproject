<?php
include('makeHeader.php');
echo makeHeader();
?>

<body id="page-top" class="page login">
    <?php include('makeNav.php');
    echo makeNav();
    ?>

    <section class="login">
        <div class="text-center">
            <form>
                <h2 class="login">Login</h2>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">Email</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="email" required='required' placeholder="email@email.com">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">Password</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="password" required='required' placeholder="Your Password">
                    </div>
                </div>

                <div class="uk-margin uk-alert uk-alert-danger js-error" style='display: none;'></div>

                <div class="uk-margin">
                    <button class="uk-button uk-button-default" type="submit">Login</button>
                </div>

            </form>
        </div>
    </section>

    <section class="register">
        <div class="text-center">
            <form>
                <h2>Register</h2>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">Email</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="email" required='required' placeholder="email@email.com">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">Passphrase</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="password" required='required' placeholder="Your passphrase">
                    </div>
                </div>

                <div class="uk-margin uk-alert uk-alert-danger js-error" style='display: none;'></div>

                <div class="uk-margin">
                    <button class="uk-button uk-button-default" type="submit">Register</button>
                </div>

            </form>
        </div>
    </section>

    <?php
    include('makeFooter.php');
    echo makeFooter();
    ?>