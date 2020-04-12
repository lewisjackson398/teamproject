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
                <h2>Hot Yoga</h2>
                <p>All classes are available to non-members and all levels are welcome.</p>
                <ul>
                    <li>Monday lunchtime: 1.15-1.45pm</li>
                    <li>Wednesday lunchtime: 1.15-1.45pm</li>
                    <li>Wednesday evenings: 7.15-8.00pm</li>
                    <li>Friday morning: 7.15-7.45am</li>
                    <li>Wednesday lunchtime: 1.15-1.45pm</li>
                    <li>Sunday morning: 8.30-9.00am</li>
                </ul>

                <p>Yoga means union. It is the union of our mind, breath and body. Breathing slowly and holding poses for a certain
                    amount of time will slow your heart rate, and focusing your mind on the practice will develop mental peace, deep insight and fantastic benefits in flexibility.</p>

                <ul>Benefits of Yoga include
                    <li>Increased flexibilitye</li>
                    <li>Increased balance and stability</li>
                    <li>A full mind and body workout</li>
                    <li>Reduced stress and anxiety levels</li>
                    <li>Increased strength</li>
                    <li>Revitalised energy levels</li>
                    <li>Increased blood circulation</li>
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