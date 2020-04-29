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
                    <h2 style="color: white">Cycling</h2>
                    <p>All classes are available to non-members and all levels are welcome.</p>
                    <div>
                        <ul>Tuesday
                            <li>Morning: 10:00 - 10:45am</li>
                            <li>Afternoon: 12:00 - 12:45pm</li>
                        </ul>
                        <ul>Friday
                            <li>Afternoon: 12:00 - 1:00pm</li>
                        </ul>
                        <ul>Sunday
                            <li>Morning: 7:00 - 7:45am</li>
                        </ul>
                    </div>

                    <p>Spinning is a very popular class for all ages and abilities. The class is excellent for burning calories, improving your aerobic
                        capacity and toning up those muscles! The classes are 45 minute intense sessions involving various different sections from hill climbs to short sprints.</p>
                    <p>Benefits of Spirit Cycle include:</p>
                    <ul>
                        <li>Increased stamina and endurance</li>
                        <li>A great calorie burner (burning up to 800kcals in a class)</li>
                        <li>Excellent improvements in aerobic capacity</li>
                        <li>Builds strength</li>
                        <li>Improves muscular tone</li>
                        <li>Enjoyable exercise</li>
                    </ul>
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