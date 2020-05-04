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
                    <h2 style="color: white">Circuits</h2>
                    <div>
                        <?php
                        $sql = "SELECT * FROM tbltimetable WHERE class = 'Circuits'";
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
                    <p>Circuit training is an excellent way to improve mobility, strength and stamina, and to burn calories in a controlled class environment. Speed, agility, balance and quickness will be challenged.
                        The format is generally a series of between 8-16 exercises around a room performed for a set time or number of repetitions.</p>
                    <p> These exercises focus on giving you a full body, high intensity workout using all of your major upper, lower and core muscle groups.
                        This class is designed to cater for all fitness levels and easier and harder adaptions of all exercises are provided to suit every level of ability.</p>
                    <h3>Benefits of Circuits include:</h3>

                    <li>Full body aerobic and toning workout</li>
                    <li>Increased stamina and endurance</li>
                    <li>Builds strength</li>
                    <li>Increased energy levels</li>
                    <li>Increased flexibility</li>
                    <li>A great calorie burner</li>
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