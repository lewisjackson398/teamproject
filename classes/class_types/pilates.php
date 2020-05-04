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
                    <h2 style="color: white">Pilates</h2>
                    <?php
                    $sql = "SELECT * FROM tbltimetable WHERE class = 'Pilates'";
                    $result = mysqli_query($link, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<h3 style='list-style: none;'>" . $row["date"] . "</h3><li class='class'>" . $row["class"] .  " at " . substr($row["start"], 0, -3) . " - " . substr($row["finish"], 0, -3) . "</li>";
                        }
                    } else {
                        echo "<h1> Sorry there are no classes to available.</h1>";
                    }
                    ?>
                    <div>
                        <br>
                        <p>Pilates offers you the perfect way to invigorate, activate and strengthen the deep postural muscles that require both stretching and strengthening. 
                            Combining slow and controlled movements that rebalance posture and bring the body into its correct alignment.
                            Excellent for back & hip rehabilitation, postural realignment and general well being.</p>

                           <p>Pilates Classes here at MetroGym are mixed ability classes catering for complete beginners through to the more experienced. 
                               Our Pilates instructor Lewis will offer adaptations for those that want to push a little harder and equally ensure, those who are newer to Pilates, get as much out of the class as possible.</p>

                        <h3>Benefits of Pilates include:</h3>

                        <li>Increased flexibility</li>
                        <li>Increased balance and stability</li>
                        <li>Reduced stress and anxiety levels</li>
                        <li>Revitalised energy levels</li>

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