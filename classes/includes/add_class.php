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
} else {
    $user_id = $_SESSION['user_id'];
    //query to get all the classes a user has joined.
    $sql = "SELECT * FROM tblclasses WHERE user_id = '$user_id'";
    //put sql into mysqli query
    $result = mysqli_query($link, $sql);

    $class = $_POST['class'];

    //seperate each word by a comma into an array 
    $str_arr = explode(",", $class);

    //query to limit a user joining the same class.
    $sql2 = "SELECT * FROM tblclasses WHERE user_id = '$user_id' AND timetable_id = '$str_arr[6]'";
    $result2 = mysqli_query($link, $sql2);

    //query to limit how many people can join a class.
    $sql3 = "SELECT * FROM tblclasses WHERE timetable_id = '$str_arr[6]' LIMIT 3";
    $result3 = mysqli_query($link, $sql3);

    //if the user is set and if the user has the a duplicate class
    if (mysqli_num_rows($result2) > 0) {
        //display the duplicate error message
        echo "<body id='page-top' class='page work_day'>
            <div style='background:transparent !important; color: white;' class='jumbotron container text-center'>
                <h3 class='display-3'>Sorry, you can't join the same session twice.</h3>
            </div>
        </body>";
    }
    //if the user has more than 5 classes.
    else if (mysqli_num_rows($result) >= 5) {
        //display the too many classes error message
        echo "<body id='page-top' class='page work_day'>
            <div style='background:transparent !important; color: white;' class='jumbotron container text-center'>
                <h3 class='display-3'>Sorry, you're only allowed to join 5 classes at once.</h3>
            </div>
        </body>";
    } else if (mysqli_num_rows($result3) >= 3) {
        //display the too many classes error message
        echo "<body id='page-top' class='page work_day'>
            <div style='background:transparent !important; color: white;' class='jumbotron container text-center'>
                <h3 class='display-3'>Sorry, all the classes have been filled.</h3>
            </div>
        </body>";
    }
    //if the validation passes submit the post.
    else {
        if (isset($_POST['join'])) {
            // Collect the form input values and store them in variables
            $user_id = $_POST['user_id'];
            $class = $_POST['class'];
            //remove whitespace from a string
            // $stripped = str_replace(' ', '', $class);
            //echo $stripped ."<br>";

            //seperate each word by a comma into an array 
            $str_arr = explode(",", $class);
            print_r($str_arr);

            //insert into the db a new class member.
            //Only works for one word answers but might have to do. 
            $sql = "INSERT INTO tblclasses (date, class, instructor_name, start, finish, user_id, timetable_id)
    VALUES ('$str_arr[1]', '$str_arr[2]', '$str_arr[3]', '$str_arr[4]', '$str_arr[5]', '$user_id', '$str_arr[6]')";

            echo "$sql";

            // Run the above query
            if (mysqli_query($link, $sql)) {
                //display the success message 
                echo "
        <body id='page-top' class='page work_day'>
            <div style='background:transparent !important; color: white;' class='jumbotron container text-center'>
                <h1 class='display-3'>Class Confirmation!</h1>
                <p class='lead'><strong>$_SESSION[username] has joined a class at MetroGym</strong><br> Please check the class details below are correct.</p>
                <hr>
                <p> $str_arr[1] - $str_arr[2] - $str_arr[3] - $str_arr[4] - $str_arr[5] </p>
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
                //display the db failed message 
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
}
?>
<section class="schedule">
    <div class="container">
        <h3 style="color: white;" class="text-center">Share this class with your friends!</h3>
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <div id="tweet-buttons">
                    <div class="row">
                        <h3 style="color: white;">Twitter</h3>
                        <a class="twitter-share-button" data-size="large" data-text="Join a class with me today!" data-hashtags="metrogym">
                            Tweet
                        </a>
                        <div id="tweet-timeline">
                            <a class="twitter-timeline" href="https://twitter.com/metrogym" data-tweet-limit=5>
                                Tweets by @metrogym
                            </a>
                        </div>
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