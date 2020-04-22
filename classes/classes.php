<?php
session_start();
include('../group/global/makeHeader.php');
echo makeHeader();
require_once('includes/add_class_resource.php');
?>

<body id="page-top" class="page page_schedule">
    <?php include('../group/global/makeNav.php');
    echo makeNav();
    ?>
    <section class="schedule">
        <div class="text-center">
            <h2>Class Weekly Schedule</h2>
        </div>
        <div class="buttons text-center">
            <a id="choice-all" class="btn btn-primary btn-xl">All Trainers</a>
            <a id="choice-lewis" class="btn btn-primary btn-xl">Lewis</a>
            <a id="choice-brandon" class="btn btn-primary btn-xl">Brandon</a>
            <a id="choice-arlana" class="btn btn-primary btn-xl">Arlana</a>
            <a id="choice-oliver" class="btn btn-primary btn-xl">Oliver</a>
            <div class="search-box">
                <input type="text" autocomplete="off" id="myInput" onkeyup="myFunction()" placeholder="Search classes..." />
                <div class="result"></div>
            </div>
        </div>


        <div class="container">
            <?php include('global/make_nav.php');
            echo makeClassNav();
            ?>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
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
                            echo "<tr onclick='joinClass()'><td class='date'>" . $row["date"] . "</td><td class='class'>" . $row["class"] . "</td><td class='instructor'>" . $row["instructor_name"] .  "</td>
        <td class='start'>" . $row["start"] . "</td><td class='finish'>" . $row["finish"] . "</td></tr>";
                        }
                        echo "</table>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <?php include('../classes/global/make_booking.php');
        echo makeBooking(); ?>

        </br>
        <div class="container" style="display: none;" id="join">
            <form action="includes/add_class_resource.php" method="post" id="form">
                <div class="form-group">
                    <label>Date</label>
                    <select class="form-control" name="date">
                        <?php

                        $sql = "SELECT DISTINCT date from tbltimetable";
                        $result = mysqli_query($link, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<option value=" . $row['date'] . ">" .  $row['date'] . "</br></option>";
                            }
                        }
                        ?>
                    </select>
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label>Class name</label>
                    <select class="form-control" name="class_names">
                        <?php

                        $sql = "SELECT DISTINCT class from tbltimetable";
                        $result = mysqli_query($link, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<option value=" . $row['class'] . ">" .  $row['class'] . "</br></option>";
                            }
                        }
                        ?>
                    </select>
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'] ?>">
                </div>
                <div class="form-group">
                    <label>Start time</label>
                    <select class="form-control" name="class_start">
                        <?php

                        $sql = "SELECT DISTINCT start from tbltimetable ORDER BY start";
                        $result = mysqli_query($link, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<option value=" . $row['start'] . ">" .  $row['start'] . "</br></option>";
                            }
                        }
                        ?>
                    </select>
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label>End time</label>
                    <select class="form-control" name="class_end">
                        <?php

                        $sql = "SELECT DISTINCT finish from tbltimetable ORDER BY finish";
                        $result = mysqli_query($link, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<option value=" . $row['finish'] . ">" .  $row['finish'] . "</br></option>";
                            }
                        }
                        ?>
                    </select>
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label>Instructor</label>
                    <select class="form-control" name="instructor_name">
                        <?php

                        $sql = "SELECT DISTINCT instructor_name from tbltimetable";
                        $result = mysqli_query($link, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<option value=" . $row['instructor_name'] . ">" .  $row['instructor_name'] . "</br></option>";
                            }
                        }
                        ?>
                    </select>
                    <span class="help-block"></span>
                </div>
                <div>
                    <input type="submit" class="btn btn-success" value="Join Class" name="join" onclick="classInfo()">
                    <input type="reset" class="btn btn-default" value="Reset">
                </div>
            </form>
        </div>
        <br>
        <div class="container" id="form2">
            <h2>Your active classes</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Class</th>
                        <th scope="col">Instructor</th>
                        <th scope="col">Starting Time</th>
                        <th scope="col">Ending Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $user_id = $_SESSION['user_id'];
                    $sql = "SELECT * FROM tblclasses WHERE user_id = '$user_id'";
                    $result = mysqli_query($link, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr onclick='row()'><td class='date'>" . $row["date"] . "</td><td class='class'>" . $row["class"] . "</td><td class='instructor'>" . $row["instructor_name"] .  "</td>
                                  <td class='start'>" . $row["start"] . "</td><td class='finish'>" . $row["finish"] . "</td></tr>";
                        }
                        echo "</table>";
                    }
                    ?>
                </tbody>
            </table>

            <form action="delete_class.php">
                <input type="submit" class="btn btn-danger" value="Delete Class">
            </form>


        </div>

        </div>

    </section>


    <?php
    include('../classes/global/make_info.php');
    include('../group/global/makeFooter.php');
    include('../group/global/makeScript.php');
    echo makeInfo();
    echo makeFooter();
    echo makeScript();
    ?>
</body>