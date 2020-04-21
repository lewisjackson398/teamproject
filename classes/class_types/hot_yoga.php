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
                    <h2 style="color: white">Hot Yoga</h2>
                    <p>All classes are available to non-members and all levels are welcome.</p>
                    <div>
                        <ul>Monday
                            <li>Morning: 7:00 - 7:45am</li>
                            <li>Afternoon: 12:00 - 1:00pm</li>
                            <li>Evening: 5:00 - 6:00pm</li>
                        </ul>
                        <ul>Wednesday
                            <li>Afternoon: 3:00 - 4:00pm</li>
                        </ul>
                        <ul>Thursday
                            <li>Evening: 5:00 - 5:45pm</li>
                        </ul>
                        <ul>Friday
                            <li>Evening: 5:00 - 5:45pm</li>
                        </ul>
                        <ul>Saturday
                            <li>Morning: 10:00 - 10:45am</li>
                            <li>Morning: 11:00 - 11:45am</li>
                            <li>Afternoon: 1:00 - 2:00pm</li>
                            <li>Afternoon: 2:00 - 2:45pm</li>
                            <li>Evening: 4:00 - 5:00pm</li>
                        </ul>
                        <ul>Sunday
                            <li>Afternoon: 12:00 - 12:45pm</li>
                        </ul>
                    </div>
                    <div>
                        <p>Yoga means union. It is the union of our mind, breath and body. Breathing slowly and holding poses for a certain
                            amount of time will slow your heart rate, and focusing your mind on the practice will develop mental peace, deep insight and fantastic benefits in flexibility.</p>

                        <p>Benefits of Hot Yoga include:</p>
                        <ul>
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