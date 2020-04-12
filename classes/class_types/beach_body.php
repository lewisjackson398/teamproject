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
                <h2>Beach Body</h2>
                <p>All classes are available to non-members and all levels are welcome.</p>
                <ul>
                    <li>Monday lunchtime: 1.15-1.45pm</li>
                    <li>Wednesday lunchtime: 1.15-1.45pm</li>
                    <li>Wednesday evenings: 7.15-8.00pm</li>
                    <li>Friday morning: 7.15-7.45am</li>
                    <li>Wednesday lunchtime: 1.15-1.45pm</li>
                    <li>Sunday morning: 8.30-9.00am</li>
                </ul>

                <p>This is a popular, fun class with a serious purpose! This class isn’t just about looking great,
                    but also about maintaining a general level of fitness that will keep you healthy and motivated in your work and personal life.</p>

                <ul>Benefits of spinning include
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