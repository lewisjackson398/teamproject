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
                    <h2 style="color: white">Senior Keep Fit</h2>
                    <p>All classes are available to non-members and all levels are welcome.</p>
                    <div>
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