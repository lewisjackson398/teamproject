<?php
include('../group/global/makeHeader.php');
echo makeHeader();
include('../server/config/config.php');
?>

<body id="page-top" class="page page_schedule">
    <?php include('../group/global/makeNav.php');
    echo makeNav();
    ?>

    <body id="page-top" class="page page_schedule">
        <section class="schedule">
            <div class="text-center">
                <h2>Class Weekly Schedule</h2>
            </div>
            <div class="buttons text-center">
                <a id="choice-all" class="btn btn-primary btn-xl">All Trainers</a>
                <a id="choice-lewis" class="btn btn-primary btn-xl">Lewis</a>
                <a id="choice-brandon" class="btn btn-primary btn-xl">Brandon</a>
                <a id="choice-arlana" class="btn btn-primary btn-xl">Arlana</a>
                <a id="choice-oliver" class="btn btn-primary btn-xl">Oliver</a>
                <div class="search-box">
                    <input type="text" autocomplete="off" id="myInput" onkeyup="myFunction()" placeholder="Search classes..." />
                    <div class="result"></div>
                </div>
            </div>

            <div class="classnav">
                <?php
                include('includes/make_nav.php');
                echo makeClassNav();
                ?>
            </div>
            <div class="container">
                <table class="table" id="myTable">
                    <thead class="hidden-xs">
                        <tr>
                            <th></th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                            <th>Sunday</th>
                        </tr>
                    </thead>
                    <tbody class="bod">
                        <tr>
                            <th class="row hidden-lg"></th>
                            <th scope="row">7:00 - 8:00am</th>
                            <td>
                                <div class="brandon"><a href="class_types/hot_yoga.php">Hot Yoga <span>7:00 - 7:45</span></a></div>
                            </td>
                            <td>
                                <div class="lewis"><a href="class_types/zumba.php">Zumba<span>7:00 - 7:45</span></a></div>
                            </td>
                            <td>
                                <div class="brandon"><a href="class_types/beach_body.php">Beach Body<span>7:00 - 7:45</span></a></div>
                            </td>
                            <td>
                                <div class="oliver"><a href="class_types/senior.php">Senior Keep Fit<span>7:00 - 7:45</span></a></div>
                            </td>
                            <td>
                                <div class="lewis"><a href="class_types/senior.php">Senior Keep Fit<span>7:00 - 7:45</span></a></div>

                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="arlana"><a href="class_types/sprirt_cycle.php">Spirit Cycle <span>7:00 - 7:45</span></a></div>
                            </td>
                        </tr>
                        <tr>
                            <th class="row hidden-lg"></th>
                            <th scope="row">8:00 - 9:00am</th>
                            <td>
                                <div class="oliver"><a href="class_types/zumba.php">Zumba <span>8:00 - 8:45</span></a></div>
                            </td>
                            <td>
                                <div class="brandon"><a href="class_types/beach_body.php">Beach Body <span>8:00 - 8:45</span></a></div>
                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="oliver"><a href="class_types/beach_body.php">Beach Body <span>8:00 - 8:45</span></a></div>
                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="brandon"><a href="class_types/senior.php">Senior Keep Fit <span>8:00 - 8:45</span></a></div>
                            </td>
                        </tr>
                        <tr>
                            <th class="row hidden-lg"></th>
                            <th scope="row">9:00 - 10:00am</th>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="oliver"><a href="class_types/zumba.php">Zumba <span>9:00 - 9:45</span></a></div>
                            </td>
                            <td>
                                <div class="brandon"><a href="class_types/beach_body.php">Beach Body <span>9:00 - 9:45</span></a></div>
                            </td>
                            <td>
                                <div class="oliver"><a href="class_types/beach_body.php">Beach Body <span>9:00 - 9:45</span></a></div>
                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="lewis"><a href="class_types/senior.php">Senior Keep Fit <span>9:00 - 9:45</span></a></div>
                            </td>
                        </tr>
                        <tr>
                            <th class="row hidden-lg"></th>
                            <th scope="row">10:00 - 11:00am</th>
                            <td>
                                <div class="brandon"><a href="class_types/senior.php">Senior Keep Fit <span>10:00 - 10:45</span></a></a></div>
                            </td>
                            <td>
                                <div class="lewis"><a href="class_types/spriit_cycle.php">Spirit cycle <span>10:00 - 10:45</span></div>
                            </td>
                            <td>
                                <div class="arlana"><a href="class_types/zumba.php">Zumba <span>10:00 - 10:45</span></a></div>
                            </td>
                            <td>
                                <div class="oliver"><a href="class_types/beach_body.php">Beach Body <span>10:00 - 10:45</span></a></div>
                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="oliver"><a href="class_types/hot_yoga.php">Hot yoga <span>10:00 - 10:45</span></a></div>
                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <th class="row hidden-lg"></th>
                            <th scope="row">11:00 - 12:00pm</th>
                            <td>
                                <div class="arlana"><a href="class_types/zumba.php">Zumba <span>11:00 - 11:45</span></a></div>
                            </td>
                            <td>
                                <div class="lewis"><a href="class_types/beach_body.php">Beach Body <span>11:00 - 12:00</span></a></div>
                            </td>
                            <td>
                                <div class="brandon"><a href="class_types/zumba.php">Zumba <span>11:00 - 12:00</span></a></div>
                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="lewis"><a href="class_types/beach_body.php">Beach Body <span>11:00 - 11:45</span></a></div>
                            </td>
                            <td>
                                <div class="oliver"><a href="class_types/hot_yoga.php">Hot yoga <span>11:00 - 11:45</span></a></div>
                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <th class="row hidden-lg"></th>
                            <th scope="row">12:00pm - 1:00pm</th>
                            <td>
                                <div class="lewis"><a href="class_types/hot_yoga.php">Hot yoga <span>12:00 - 1:00</span></a></div>
                            </td>
                            <td>
                                <div class="arlana"><a href="class_types/spirit_cycle.php">Spirit cycle <span>12:00 - 12:45</span></a></div>
                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="oliver"><a href="class_types/beach_body.php">Beach Body <span>12:00 - 12:45</span></a></div>
                            </td>
                            <td>
                                <div class="brandon"><a href="class_types/spirit_cycle.php">Spirit cycle <span>12:00 - 1:00</span></a></div>
                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="lewis"><a href="class_types/hot_yoga.php">Hot yoga <span>9:00 - 9:45</span></a></div>
                            </td>
                        </tr>
                        <tr>
                            <th class="row hidden-lg"></th>
                            <th scope="row">1:00pm - 2:00pm</th>
                            <td>
                                <div class="lewis"><a href="class_types/beach_body.php">Beach Body <span>1:00 - 1:45</span></a></div>
                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="arlana"><a href="class_types/zumba.php">Zumba <span>1:00 - 2:00</span></a></div>
                            </td>
                            <td>
                                <div class="oliver"><a href="class_types/beach_body.php">Beach Body <span>1:00 - 2:00</span></a></div>
                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="oliver"><a href="class_types/hot_yoga.php">Hot yoga <span>1:00 - 2:00</span></a></div>
                            </td>
                            <td>
                                <div class="oliver"><a href="class_types/senior.php">Senior Keep Fit <span>1:00 - 2:00</span></a></div>
                            </td>
                        </tr>
                        <tr>
                            <th class="row hidden-lg"></th>
                            <th scope="row">2:00pm - 3:00pm</th>
                            <td>
                                <div class="lewis"><a href="class_types/beach_body.php">Beach Body <span>2:00 - 2:45</span></a></div>
                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="arlana"><a href="class_types/zumba.php">Zumba <span>2:00 - 2:45</span></a></div>
                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="oliver"><a href="class_types/hot_yoga.php">Hot yoga <span>2:00 - 2:45</span></a></div>
                            </td>
                            <td>
                                <div class="oliver"><a href="class_types/senior.php">Senior Keep Fit <span>2:00 - 3:00</span></a></div>
                            </td>
                        </tr>
                        <tr>
                            <th class="row hidden-lg"></th>
                            <th scope="row">3:00pm - 4:00pm</th>
                            <td>

                            </td>
                            <td>
                                <div class="brandon"><a href="class_types/zumba.php">Zumba <span>3:00 - 4:00</span></a></div>
                            </td>
                            <td>
                                <div class="oliver"><a href="class_types/hot_yoga.php">Hot yoga <span>3:00 - 4:00</span></a></div>

                            </td>
                            <td>
                                <div class="arlana"><a href="class_types/zumba.php">Zumba <span>3:00 - 4:00</span></a></div>
                            </td>
                            <td>
                                <div class="lewis"><a href="class_types/senior.php">Senior Keep Fit <span>3:00 - 4:00</span></a></div>
                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="oliver"><a href="class_types/senior.php">Senior Keep Fit <span>3:00 - 4:00</span></a></div>
                            </td>
                        </tr>
                        <tr>
                            <th class="row hidden-lg"></th>
                            <th scope="row">4:00pm - 5:00pm</th>
                            <td>
                                <div class="oliver"><a href="class_types/senior.php">Senior Keep Fit <span>4:00 - 5:00</span></a></div>

                            </td>
                            <td>
                                <div class="lewis"><a href="class_types/beach_body.php">Beach Body <span>4:00 - 4:45</span></a></div>
                            </td>
                            <td>
                                <div class="arlana"><a href="class_types/zumba.php">Zumba <span>4:00 - 4:45</span></a></div>
                            </td>
                            <td>
                                <div class="oliver"><a href="class_types/beach_body.php">Beach Body <span>4:00 - 5:00</span></a></div>
                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="oliver"><a href="class_types/hot_yoga.php">Hot yoga <span>4:00 - 5:00</span></a></div>
                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <th class="row hidden-lg"></th>
                            <th scope="row">5:00pm - 6:00pm</th>
                            <td>
                                <div class="lewis"><a href="class_types/beach_body.php">Beach Body <span>5:00 - 6:00</span></a></div>
                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="arlana"><a href="class_types/zumba.php">Zumba <span>5:00 - 6:00</span></a></div>
                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="oliver"><a href="class_types/hot_yoga.php">Hot yoga <span>5:00 - 5:45</span></a></div>

                            </td>
                            <td>
                                <div class="lewis"><a href="class_types/senior.php">Senior Keep Fit <span>5:00 - 6:00</span></a></div>
                            </td>
                            <td>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <?php include('../classes/includes/make_booking.php');
            echo makeBooking(); ?>

        </section>
        <?php
        include('../classes/includes/make_info.php');
        include('../group/global/makeFooter.php');
        include('../group/global/makeScript.php');
        echo makeInfo();
        echo makeFooter();
        echo makeScript();
        ?>
    </body>