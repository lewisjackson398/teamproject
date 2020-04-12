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
                <h2>Zumba</h2>
                <p>All classes are available to non-members and all levels are welcome.</p>
                <div class="1">
                    <ul>Monday
                        <li>Morning: 8:00 - 8:45am</li>
                        <li>Morning: 11:00 - 11:45am</li>
                    </ul>
                    <ul>Tuesday
                        <li>Morning: 7:00 - 7:45am</li>
                        <li>Afternoon: 3:00 - 4:00pm</li>
                    </ul>
                    <ul>Wednesday
                        <li>Morning: 9:00 - 9:45am</li>
                        <li>Morning: 10:00 - 10:45am</li>
                        <li>Afternoon: 11:00 - 12:00pm</li>
                        <li>Afternoon: 1:00 - 2:00pm</li>
                        <li>Afternoon: 2:00 - 2:45pm</li>
                        <li>Evening: 4:00 - 4:45pm</li>
                        <li>Evening: 5:00 - 6:00pm</li>
                    </ul>
                    <ul>Thursday
                        <li>Afternoon: 3:00 - 4:00pm</li>
                    </ul>
                </div>

                <p>The ZUMBA program is a Latin-inspired, dance-fitness class that incorporates Latin and international music and dance movements, creating a dynamic, exciting, exhilarating and effective fitness system.
                    A ZUMBA class combines fast and slow rhythms that tone and sculpt the body using an aerobic/fitness approach to achieve a unique blended balance of cardio and muscle-toning benefits.</p>
                <p>Benefits of Zumba include:</p>
                <ul>
                    <li>Great increase in Aerobic capacity</li>
                    <li>A Great calorie burner</li>
                    <li>Excellent improvements in body toning</li>
                    <li>Great fun</li>
                    <li>Effective & Enjoyable/li>
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