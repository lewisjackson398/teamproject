<?php
session_start();
//hide errors for professional use
error_reporting(0);
include('../group/global/makeHeader.php');
echo makeHeader();
include('../server/config/config.php')
?>

<body id="page-top" class="page page_schedule">
    <?php include('../group/global/makeNav.php');
    echo makeNav();
    ?>
    <section class="schedule">
        <div class="text-center">
            <h2>Class Weekly Schedule</h2>
        </div>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="makeNav">
                        <?php include('global/make_nav.php');
                        echo makeClassNav();
                        ?>
                    </div>
                </div>

                <div class="col-sm-10">
                    <div id="search-box">
                        <input type="text" oninput="w3.filterHTML('#timetable', '.item', this.value)" placeholder="Search classes..." />
                    </div>
                    <h3 style="color: white;">View your active classes below.</h3>
                    <table class="table" id="timetable">
                        <thead>
                            <tr id="timetable_row2">
                                <th scope="col">Date</th>
                                <th scope="col">Class</th>
                                <th scope="col">Instructor</th>
                                <th scope="col">Starting Time</th>
                                <th scope="col">Ending Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM tbltimetable ORDER BY date='Sunday', date='Saturday', date='Friday', date='Thursday', date='Wednesday', date='Tuesday', date='Monday', start ";
                            $result = mysqli_query($link, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<tr class='item'><td class='date'>" . $row["date"] . "</td><td class='class'>" . $row["class"] . "</td><td class='instructor'>" . $row["instructor_name"] .  "</td>
                                    <td class='start'>" . substr($row["start"], 0, -3) . "</td><td class='finish'>" . substr($row["finish"], 0, -3) . "</td></tr>";
                                }
                                echo "</table>";
                            } else {
                                echo "<h1 style='color: white;'> Sorry there are no classes to available.</h1>";
                            }
                            ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <br>

        <?php include('includes/display.php'); ?>

        <?php
        if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        } else {
            echo '
        <div id="addDelete" class="container">
            <form action="includes/add_class.php" method="post">
                <div class="form-group">';


            $sql = "SELECT tbltimetable.* FROM tbltimetable ORDER BY date='Sunday', date='Saturday', date='Friday', date='Thursday', date='Wednesday', date='Tuesday', date='Monday', start";
            $result = mysqli_query($link, $sql);
            $sql2 = "SELECT * FROM tblclasses";
            $result2 = mysqli_query($link, $sql2);
            if (mysqli_num_rows($result) > 0) {
                echo '<label style="color: white;">
                        <h1>Select a class to join</h1>
                    </label>
                    <select class="form-control" name="class" id="resize">';
                while ($row = mysqli_fetch_array($result)) {
                    echo "<option value=" . $row['class_id'] . "," . $row['date'] . "," . $row['class'] . "," . $row['instructor_name'] . "," . $row['start'] . "," . $row['finish'] . "," . $row['timetable_id'] . ">"
                        . $row['date'] . " - " . $row['class']  . " - " . substr($row["start"], 0, -3) . " - " . substr($row["finish"], 0, -3) . "</br></option>";
                }
            } else {
                echo "<h3 style='color: white;'><option value>No classes available to add. </option></h3>";
            }

            echo '  </select>
                    <span class="help-block"></span>
                    <div class="form-group">
                        <input type="hidden" name="user_id" value="';
            echo $_SESSION['user_id'];
            echo '"/>
                    </div>
                </div>';

            if (mysqli_num_rows($result) == 0) {
                echo '';
            } else {
                echo '
                <div>
                    <input style="color: white;" type="submit" class="btn btn-success" value="Join Class" name="join">
                </div>
            </form> ';
            }
        };
        ?>
        <?php
        if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        } else {

            $sql = "SELECT * from tblclasses WHERE user_id = '$user_id' ORDER BY date='Sunday', date='Saturday', date='Friday', date='Thursday', date='Wednesday', date='Tuesday', date='Monday', start";
            $result = mysqli_query($link, $sql);

            echo '
            <form action="includes/delete_class.php" method="post">
                <div class="form-group">';

            if (mysqli_num_rows($result) > 0) {
                echo "<label style='color: white;'>
                            <h1>Select a class to delete</h1>
                          </label>
                        <select class='form-control' name='class' id='resize'>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "
                        <option value=" . $row['class_id'] . "," . $row['date'] . "," . $row['class'] . "," . $row['start'] . "," . $row['finish'] . ">"
                        . $row['date'] . " - " . $row['class']  . " - " . substr($row["start"], 0, -3) . " - " . substr($row["finish"], 0, -3) . "</br></option>";
                }
            } else {
                echo "";
            }
            echo '
            </select>
                    <span class="help-block"></span>
                    <div class="form-group">
                        <input type="hidden" name="user_id" value="';

            echo $_SESSION["user_id"];

            echo '"/>
                    </div>
                </div>';

            if (mysqli_num_rows($result) == 0) {
                echo '';
            } else {
                echo '     <div>
                    <input style="color: white;" type="submit" class="btn btn-warning" value="Delete Class" name="delete">
                </div>
            </form>
        </div>
        <br>';
            }
        }              ?>

        </div>
    </section>

    <?php
    include('../classes/global/make_info.php');
    echo makeInfo();
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
        <?php include('../classes/global/make_booking.php');
        echo makeBooking(); ?>
        <br>
    </section>

    <?php
    include('../group/global/makeFooter.php');
    include('../group/global/makeScript.php');

    echo makeFooter();
    echo makeScript();
    ?>
</body>