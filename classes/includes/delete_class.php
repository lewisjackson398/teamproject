<?php
session_start();
//connect to db
include('../../server/config/config.php');
include('../../group/global/makeHeader.php');
include('../../group/global/makeNav.php');
echo makeHeader();
echo makeNav();

//delete a class if they are no longer going.
if (isset($_POST['delete'])) {
    // Collect the form input values and store them in variables

    $user_id = $_POST['user_id'];
    //echo $user_id . "<br>";


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

    $delete_class = "DELETE FROM tblclasses WHERE class_id = '$str_arr[0]'";
    //echo $delete_class . "<br>";

    // Run the above query
    if (mysqli_query($link, $delete_class)) {
        echo "        
            <body id='page-top' class='page work_day'>
                <div style='background:transparent !important; color: white;' class='jumbotron container text-center'>
                    <h1 class='display-3'>$_SESSION[username] has deleted a class.</h1>
                    <p class='lead'>Please check to make sure you have deleted the right class below.</p>
                    <hr>
                    <p> $str_arr[1] - $str_arr[2] - $str_arr[3] - $str_arr[4] </p>
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