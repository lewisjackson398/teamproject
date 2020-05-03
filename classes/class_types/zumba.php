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
                    <h2 style="color: white">Zumba</h2>
                    <div>
                        <?php
                        $sql = "SELECT * FROM tbltimetable WHERE class = 'Zumba'";
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

                    <p>The ZUMBA program is a Latin-inspired, dance-fitness class that incorporates Latin and international music and dance movements, creating a dynamic, exciting, exhilarating and effective fitness system.
                        A ZUMBA class combines fast and slow rhythms that tone and sculpt the body using an aerobic/fitness approach to achieve a unique blended balance of cardio and muscle-toning benefits.</p>
                    <p>Benefits of Zumba include:</p>

                    <li>Great increase in Aerobic capacity</li>
                    <li>A Great calorie burner</li>
                    <li>Excellent improvements in body toning</li>
                    <li>Great fun</li>
                    <li>Effective & Enjoyable</li>
                        <br>
                        <p><strong style="color: #37ecba; font-size: 20px;">Classes are only available to MetroGym members. </strong></p>
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