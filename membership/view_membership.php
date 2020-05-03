<?php
session_start();

require_once("includes/view_membership_resource.php");

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) 
{
    header("location: ../group/login.php");
    exit;
}

include('../group/global/makeHeader.php');
echo makeHeader();
?>

<body id="page-top" class="page view-membership">
    <?php 
    include('../group/global/makeNav.php');
    echo makeNav();
    ?>
    <br><br>
    <section class="membership_cont">
        <div class="container">
            <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Here is your current membership.</h1>
            <br></br>
            <table style="width:100%" border="1" style="border-collapse:collapse;">
                <tr>
                    <th style="text-align:center">Age</th>
                    <th style="text-align:center">Gender</th>
                    <th style="text-align:center">Membership type</th>
                    <th style="text-align:center">Date joined</th>
                    <th style="text-align:center">End of membership</th>
                </tr>
                <tr>
                    <th style="text-align:center"><?php echo $member_rows[1]; ?></th>
                    <th style="text-align:center"><?php echo $member_rows[2]; ?></th>
                    <th style="text-align:center"><?php echo $member_rows[3]; ?></th>
                    <th style="text-align:center"><?php echo $member_rows[4]; ?></th>
                    <th style="text-align:center"><?php echo $member_rows[5]; ?></th>
                </tr>
            </table>
        </div>
    </section>
<?php
    include('../group/global/makeFooter.php');
    echo makeFooter();
?>