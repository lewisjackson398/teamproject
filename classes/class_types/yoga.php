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
                    <h2 style="color: white">Yoga</h2>
                    <div>
                        <?php
                        $sql = "SELECT * FROM tbltimetable WHERE class = 'Yoga'";
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
                        <p>Yoga means union. It is the union of our mind, breath and body. Breathing slowly and holding poses for a certain
                            amount of time will slow your heart rate, and focusing your mind on the practice will develop mental peace, deep insight and fantastic benefits in flexibility.</p>

                        <h3>Benefits of Yoga include:</h3>

                        <li>Increased flexibility</li>
                        <li>Increased balance and stability</li>
                        <li>A full mind and body workout</li>
                        <li>Reduced stress and anxiety levels</li>
                        <li>Increased strength</li>
                        <li>Revitalised energy levels</li>
                        <li>Increased blood circulation</li>
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