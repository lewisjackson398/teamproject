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
                    <h2 style="color: white">Kettlebells</h2>
                    <div>
                        <?php
                        $sql = "SELECT * FROM tbltimetable WHERE class = 'Kettlebells'";
                        $result = mysqli_query($link, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<h3 style='list-style: none;'>" . $row["date"] . "</h3><li class='class'>" . $row["class"] .  " at " . substr($row["start"], 0, -3) . " - " . substr($row["finish"], 0, -3) . "</li>";
                            }
                        } else {
                            echo "<h1> Sorry there are no classes to available.</h1>";
                        }
                        ?>
                    </div>
                    <br>
                    <div>
                        <p>Kettlebells have long been used as a dynamic tool to help strength and endurance. They engage the core in almost every lift, so support you in developing core strength. A great low impact class that gives the body a total workout.
                            Our 2 hour classes are sure to test you in a unique way sweating away calories and toning almost every muscle in the body.</p>

                        <p>Benefits of Beach Body include:</p>


                        <li>Increase in Cardiovascular fitness</li>
                        <li>Full body toning</li>
                        <li>Fun and enjoyable</li>

                        <br>
                        <p><strong style="color: #37ecba; font-size: 20px;">Classes are only available to MetroGym members. </strong></p>
                    </div>
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