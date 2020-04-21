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
                include('../includes/make_nav.php');
                echo makeClassNav();
                ?>

            </div>

            <div class="col-lg-10">
                <div class="text-left" style="color: white">
                    <h2 style="color: white">Beach Body</h2>
                    <p>All classes are available to non-members and all levels are welcome.</p>
                    <div>
                        <ul>Monday
                            <li>Lunchtime: 1:00 - 2:00pm</li>
                            <li>Lunchtime: 2:00 - 2:45pm</li>
                            <li>Evening: 5:00 - 6:00pm</li>
                        </ul>
                        <ul>Tuesday
                            <li>Morning: 8:00 - 8:45am</li>
                            <li>Morning: 11:00 - 12:00pm</li>
                            <li>Evening: 4:00 - 4:45pm</li>
                        </ul>
                        <ul>Wednesday
                            <li>Morning: 7:00 - 7:45am</li>
                        </ul>
                        <ul>Thursday
                            <li>Morning: 9:00 - 9:45am</li>
                            <li>Morning: 10:00 - 10:45am</li>
                            <li>Afternoon: 12:00 - 12:45pm</li>
                            <li>Afternoon: 1:00 - 2:00pm</li>
                            <li>Evening: 4:00 - 5:00pm</li>
                        </ul>
                        <ul>Friday
                            <li>Morning: 8:00 - 8:45am</li>
                            <li>Morning: 9:00 - 9:45am</li>
                            <li>Morning: 11:00 - 11:45am</li>
                        </ul>
                    </div>
                    <div>
                        <p>This is a popular, fun class with a serious purpose! This class isn’t just about looking great,
                            but also about maintaining a general level of fitness that will keep you healthy and motivated in your work and personal life.</p>

                        <p>Benefits of Beach Body include:</p>

                        <ul>
                            <li>Full body aerobic and toning workout</li>
                            <li>Increased stamina and endurance</li>
                            <li>Builds strength</li>
                            <li>Increased energy levels</li>
                            <li>Increased flexibility</li>
                            <li>A great calorie burner</li>
                            <li>Enjoyable exercise</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </br>
    </br>
    <?php include('../../classes/includes/make_booking.php');
    echo makeBooking(); ?>
    </br>
    </br>



    <?php
    include('../../classes/includes/make_info.php');
    include('../../group/global/makeFooter.php');
    include('../../group/global/makeScript.php');
    echo makeInfo();
    echo makeFooter();
    echo makeScript();
    ?>
</body>