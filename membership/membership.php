<?php
session_start();

require_once('includes/membership_resource.php');

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../group/login.php");
    exit;
}

// Initialize the session
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

            <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Fill out this form to start a membership.</h1>
            <br></br>
            <form action="../membership/includes/membership_resource.php" method="post">
                <div class="form-group">
                    <label>Age</label>
                    <select class="form-control" name="age" value="">
                        <?php
                            for($i = 16; $i <= 100; $i++)
                            {
                                ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php
                            }
                        ?>
                    </select>
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <select class="form-control" name="gender" value="">
                        <option value="M">M</option>
                        <option value="F">F</option>
                        <option value="O">O</option>
                    </select>
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label>Membership Type</label>
                    <select onchange="checkpackage()" class="form-control" id="package_type" name="membership_type" value="">
                        <option value="bronze">Bronze</option>
                        <option value="silver">Silver</option>
                        <option value="gold">Gold</option>
                    </select>
                    <span class="help-block"></span>
                </div>
                <div class="form-group"> 
                    <label>Price</label>
                    <input class="form-control" id="price" type="text" name="price" value="" readonly>
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label>Payment type</label>
                    <select class="form-control" name="payment_type" value="">
                        <option value="PayPal">PayPal</option>
                        <option value="Visa">Visa</option>
                        <option value="Mastercard">Mastercard</option>
                    </select>
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label>Start of membership</label>
                    <input class="form-control" id="membership_start" type="text" name="membership_start" value="" readonly>
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label>End of membership</label>
                    <input class="form-control" id="membership_end" type="text" name="membership_end" value="" readonly>
                    <span class="help-block"></span>
                </div>
                <div>
                <div class="form-group">
                    <input type="hidden" name="payment_time" id="payment_time" value="">
                </div>
                <div class="form-group">
                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'] ?>">
                </div>
                    <input onclick="checktime()" type="submit" class="btn btn-primary" value="Submit" name="submit">
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

<script>

    function checkpackage() 
    {
        var package_type = document.getElementById("package_type").value.toLowerCase();
        var price = "";

        if (package_type == "bronze") 
        {
            price = "150";
        }
        else if(package_type == "silver") 
        {
            price = "200";
        }
        else if(package_type == "gold") 
        {
            price = "250";
        }

        document.getElementById("price").value = price;
    }     

    var today = new Date();
    var current_date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
    var next_date = today.getFullYear() + '-' + (today.getMonth() + 2) + '-' + today.getDate();

    document.getElementById("membership_start").value = current_date;
    document.getElementById("membership_end").value = next_date;

    function checktime()
    {
        var time = new Date();
        var current_time = time.getHours() + ':' + time.getMinutes() + ':' + time.getSeconds();

        document.getElementById("payment_time").value = current_time;
    }
    

</script>
