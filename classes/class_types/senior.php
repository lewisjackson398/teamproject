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
                <h2>Senior Keep Fit</h2>
                <p>All classes are available to non-members and all levels are welcome.</p>
                <div class="1">
                    <ul>Monday
                        <li>Evening: 4:00 - 5:00pm</li>
                    </ul>
                    <ul>Thursday
                        <li>Morning: 7:00 - 7:45am</li>
                    </ul>
                    <ul>Friday
                        <li>Morning: 7:00 - 7:45am</li>
                        <li>Afternoon: 3:00 - 4:00pm</li>
                    </ul>
                    <ul>Saturday
                        <li>Evening: 5:00 - 6:00pm</li>
                    </ul>
                    <ul>Sunday
                        <li>Morning: 8:00 - 8:45am</li>
                        <li>Morning: 9:00 - 9:45am</li>
                        <li>Afternoon: 1:00 - 2:00pm</li>
                        <li>Afternoon: 2:00 - 3:00pm</li>
                        <li>Afternoon: 3:00 - 4:00pm</li>
                    </ul>
                </div>
                <p>Benefits of Senior Keep Fit include:</p>
                <ul>
                    <li>A low-impact class designed specifically for the more mature exerciser.</li>
                    <li>Heart and lungs exercises that will improve stamina for everyday activities.</li>
                    <li>Strength training that will help maintain strong joints and keep osteoporosis at bay.</li>
                    <li>Some relaxing and stretching to aid mobility.</li>
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