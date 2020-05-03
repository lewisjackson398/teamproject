@@ -1,75 +0,0 @@
<?php
include('../../server/config/config.php');
include('../../group/global/makeHeader.php');
include('../../group/global/makeNav.php');
echo makeHeader();
echo makeNav();
?>

<body id="page-top" class="page page_schedule">
    <div class="container">
        </br>
        </br>
        </br>
        </br>
        <div class="row">

            <div class="col-lg-2">

                <?php
                include('../global/make_nav.php');
                echo makeClassNav();
                ?>

            </div>

            <div class="col-lg-10">
                <div class="text-left" style="color: white">
                    <h2 style="color: white">Spinning</h2>
                    <div>
                        <?php
                        $sql = "SELECT * FROM tbltimetable WHERE class = 'Spinning'";
                        $result = mysqli_query($link, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<h3 style='list-style: none;'>" . $row["date"] . "</h3><li class='class'>" . $row["class"] .  " at " . substr($row["start"], 0, -3) . " - " . substr($row["finish"], 0, -3) . "</li>";
                            }
                        } else {
                            echo "<h3> Sorry there are no classes to available.</h3>";
                        }
                        ?>
                    </div>
                    <br>
                    <p>Spinning is a very popular class for all ages and abilities. The class is excellent for burning calories, improving your aerobic
                        capacity and toning up those muscles! The classes are 1 hour intense sessions involving various different sections from hill climbs to short sprints.</p>
                    <h4>Benefits of Spinning include:</h4>

                    <li>Increased stamina and endurance</li>
                    <li>A great calorie burner (burning up to 800kcals in a class)</li>
                    <li>Excellent improvements in aerobic capacity</li>
                    <li>Builds strength</li>
                    <li>Improves muscular tone</li>
                    <li>Enjoyable exercise</li>
                    <br>
                    <p><strong style="color: #37ecba; font-size: 20px;">Classes are only available to MetroGym members. </strong></p>
                </div>
            </div>
        </div>
    </div>

    </br>
    </br>
    <?php include('../../classes/global/make_booking.php');
    echo makeBooking(); ?>
    </br>
    </br>


    <?php
    include('../../classes/global/make_info.php');
    include('../../group/global/makeFooter.php');
    include('../../group/global/makeScript.php');
    echo makeInfo();
    echo makeFooter();
    echo makeScript();
    ?>
</body>