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
                    <h2 style="color: white;">Boxing</h2>
                    <div>
                        <?php
                        $sql = "SELECT * FROM tbltimetable WHERE class = 'Boxing'";
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

                    <p>This class is designed to give an all over full body toning and aerobic experience. The class is set to cater for all fitness levels,
                        easier and harder alternatives will be given to every exercise whilst attaining the added motivation that group exercise creates.</p>
                    <h3>Benefits of Boxing include:</h3>

                    <li>Increased stamina and endurance</li>
                    <li>A great calorie burner (burning up to 800kcals in a class)</li>
                    <li>Excellent improvements in aerobic capacity</li>
                    <li>Builds strength</li>
                    <li>Improves muscular tone</li>
                    <li>Enjoyable exercise</li>
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