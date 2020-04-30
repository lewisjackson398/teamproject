<?php
session_start();
include('../../server/config/config.php');
include('../../group/global/makeHeader.php');
include('../../group/global/makeNav.php');
echo makeHeader();
echo makeNav();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../../group/login.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM tblclasses WHERE user_id = '$user_id'";
$result = mysqli_query($link, $sql);


$class = $_POST['class'];
$str_arr = explode(",", $class);
//print_r($str_arr);
$get_class_id = "SELECT class_id FROM tblclasses WHERE user_id = '$user_id' & class_id = '$str_arr[0]'";
//echo $get_class_id . "<br>";
$class_result = mysqli_query($link, $get_class_id);
// Store the result above as an array
$class_rows = mysqli_fetch_array($class_result, MYSQLI_NUM);
// Store the first object in the array, which is the class_id, as a variable
$class_id = $class_rows[0];
//echo $class_id . "<br>";

//Cant create a class if user has more than 5 active classes.
if (mysqli_num_rows($result) >= 5) {
    echo "<body id='page-top' class='page work_day'>
            <div style='background:transparent !important; color: white;' class='jumbotron container text-center'>
                <h3 class='display-3'>Sorry, you're only allowed to join 5 classes at once.</h3>
            </div>
        </body>";
}
//Dont allow the user to join the same class twice. 
else if ($class_id = $class_id) {
    echo "<body id='page-top' class='page work_day'>
            <div style='background:transparent !important; color: white;' class='jumbotron container text-center'>
                <h3 class='display-3'>Sorry, you can't join the same session twice.</h3>
            </div>
        </body>";
} else {

    //add a user to a class.
    if (isset($_POST['join'])) {
        // Collect the form input values and store them in variables

        $user_id = $_POST['user_id'];
        // use of explode 
        $class = $_POST['class'];
        //remove whitespace from a string
        // $stripped = str_replace(' ', '', $class);
        // echo $stripped ."<br>";
        //seperate each word by a comma into an array 
        $str_arr = explode(",", $class);
        //print_r($str_arr);

        //insert into the db a new class member
        //Only works for one word answers but might have to do. 
        $sql = "INSERT INTO tblclasses (date, class, instructor_name, start, finish, user_id)
    VALUES ('$str_arr[0]', '$str_arr[1]', '$str_arr[2]', '$str_arr[3]', '$str_arr[4]', '$user_id')";

        $sql2 = "SELECT class_id FROM tblclasses WHERE user_id = '$user_id' ";

        // Run the above query
        if (mysqli_query($link, $sql)) {
            echo "
        <body id='page-top' class='page work_day'>
            <div style='background:transparent !important; color: white;' class='jumbotron container text-center'>
                <h1 class='display-3'>Class Confirmation!</h1>
                <p class='lead'><strong>$_SESSION[username] has joined a class at MetroGym</strong><br> Please check the class details below are correct.</p>
                <hr>
                <p> $str_arr[0] - $str_arr[1] - $str_arr[2] - $str_arr[3] - $str_arr[4] </p>
                <p>
                Having trouble? <a href='../../group/contact.php'>Contact us</a>
                </p>
                <p class='lead'>
                <a class='btn btn-success btn-sm' href='../../index.php' role='button'>Continue to homepage</a>
                </p>
            </div>
        </body>
        ";
        } else {
            echo "
        <body id='page-top' class='page work_day'>
            <div style='background:transparent !important; color: white;' class='jumbotron container text-center'>
                <h1 class='display-3'>Sorry!</h1>
                <p class='lead'><strong>Something has gone wrong</strong><br> Please try again.</p>
                <hr>
                <p>
                If the problem still exists please contact us here.<a href='../../group/contact.php'> Contact us</a>
                </p>
                <p class='lead'>
                <a class='btn btn-success btn-sm' href='../classes.php' role='button'>Continue back to classes</a>
                </p>
            </div>
        </body>
        ";
        }
    }
}
?>
<section class="schedule">
    <div class="container">
        <h3 style="color: white;" class="text-center">Follow us on our social media for the latest updates!</h3>
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <div id="tweet-buttons">
                    <div class="row">
                        <h3 style="color: white;">Twitter</h3>
                        <a class="twitter-follow-button" href="https://twitter.com/metrogym" data-size="large">
                            Follow @metrogym</a>
                        <div id="tweet-timeline">
                            <a class="twitter-timeline" href="https://twitter.com/metrogym" data-tweet-limit=5>
                                Tweets by @metrogym
                            </a>
                        </div>
                        <a class="twitter-share-button" data-size="large" data-text="Join a class with me today!" data-hashtags="metrogym">
                            Tweet
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-5" style="float: right;">
                <div class="row">
                    <div id="fb-root"></div>
                    <h3 style="color: white;">Facebook</h3>
                    <div class="fb-share-button" style="padding-bottom: 5px;" data-size="large" data-href="https://www.facebook.com/Hullgym" data-layout="button_count"></div>
                    <br>
                    <div class="fb-page" data-tabs="timeline,events,messages" data-href="https://www.facebook.com/Hullgym" width="500" height="1305" data-hide-cover="false"></div>
                </div>

            </div>
        </div>
    </div>
    <br>
    <?php include('../../classes/global/make_booking.php');
    echo makeBooking(); ?>
    <br>
</section>
<?php
include('../../group/global/makeScript.php');
include('../../group/global/makeFooter.php');
echo makeScript();
echo makeFooter();
?>