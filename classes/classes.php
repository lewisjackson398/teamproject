<?php
session_start();
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

        <div class="container">
            <div class="makeNav">
                <?php include('global/make_nav.php');
                echo makeClassNav();
                ?>
            </div>
            <div id="search-box">
                <input type="text" oninput="w3.filterHTML('#timetable', '.item', this.value)" placeholder="Search classes..." />
            </div>
            <br>
            <br>
            <table class="table" id="timetable">
                <thead class="thead-dark">
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
                            echo "<tr onclick='joinClass()' class='item'><td class='date'>" . $row["date"] . "</td><td class='class'>" . $row["class"] . "</td><td class='instructor'>" . $row["instructor_name"] .  "</td>
        <td class='start'>" . $row["start"] . "</td><td class='finish'>" . $row["finish"] . "</td></tr>";
                        }
                        echo "</table>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <br>
        <div id="active" style="display: none;">
            <div class="container">
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
            </div>
        </div>

        <div id="addDelete" style="display: none;" class="container">
            <form action="includes/add_class.php" method="post">
                <div class="form-group">
                    <label>
                        <h1>Select a class to join</h1>
                    </label>
                    <select class="form-control" name="class">
                        <?php
                        $sql = "SELECT * from tbltimetable";
                        $result = mysqli_query($link, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<option value="  . $row['date'] . "," . $row['class'] . "," . $row['instructor_name'] . "," . $row['start'] . "," . $row['finish'] . ">"
                                    . $row['date'] . " - " . $row['class']  . " - " . $row['start'] . " - " . $row['finish'] . "</br></option>";
                            }
                        }
                        ?>
                    </select>
                    <span class="help-block"></span>
                    <div class="form-group">
                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'] ?>">
                    </div>
                </div>
                <div>
                    <input type="submit" class="btn btn-success" value="Join Class" name="join">
                </div>
            </form>

            <form action="includes/delete_class.php" method="post">
                <div class="form-group">
                    <label>
                        <h1>Select a class to delete</h1>
                    </label>
                    <select class="form-control" name="class">
                        <?php

                        $sql = "SELECT * from tblclasses WHERE user_id = '$user_id'";
                        $result = mysqli_query($link, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<option value=" . $row['class_id'] . "," . $row['date'] . "," . $row['class'] . "," . $row['start'] . "," . $row['finish'] . ">"
                                    . $row['date'] . " - " . $row['class']  . " - " . $row['start'] . " - " . $row['finish'] . "</br></option>";
                            }
                        }
                        ?>
                    </select>
                    <span class="help-block"></span>
                    <div class="form-group">
                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'] ?>">
                    </div>
                </div>
                <div>
                    <input type="submit" class="btn btn-warning" value="Delete Class" name="delete">
                </div>
            </form>
        </div>
        <br>

        <?php include('../classes/global/make_booking.php');
        echo makeBooking(); ?>

        </br>
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