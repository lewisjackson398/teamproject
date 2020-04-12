<?php
include('../../group/global/makeHeader.php');
echo makeHeader();
include('../../server/config/config.php');
?>

<body id="page-top" class="page page_schedule">
    <?php include('../../group/global/makeNav.php');
    echo makeNav();
    ?>

    <div class="classnav">
        <?php
        include('../includes/make_nav.php');
        echo makeClassNav();
        ?>

    </div>
    <section class="schedule">
        <div class="container">
            <div class="text-left" style="color: white">
                <h2>Spirit Cycle</h2>
                <p>All classes are available to non-members and all levels are welcome.</p>
                <div class="1">
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
        <?php include('../../classes/includes/make_booking.php');
        echo makeBooking(); ?>
    </section>
    <?php
    include('../../classes/includes/make_info.php');
    include('../../group/global/makeFooter.php');
    include('../../group/global/makeScript.php');
    echo makeInfo();
    echo makeFooter();
    echo makeScript();
    ?>
</body>