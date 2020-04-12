<?php
include('../group/global/makeHeader.php');
echo makeHeader();
include('../server/config/config.php');
?>

<body id="page-top" class="page page_schedule">
    <?php include('../group/global/makeNav.php');
    echo makeNav();
    ?>

    <section class="schedule">
        <div class="text-center">
            <h2>Class Schedule</h2>
            <p style="color: white"> Our classes are open to both members and non-members.</p>
        </div>
        <div class="buttons text-center">
            <a href="#" id="all" class="btn btn-primary btn-xl">All trainers</a>
            <a href="#" id="lewis" class="btn btn-primary btn-xl">Lewis</a>
            <a href="#" id="brandon" class="btn btn-primary btn-xl">Brandon</a>
            <a href="#" id="oliver" class="btn btn-primary btn-xl">Oliver</a>
            <a href="#" id="arlana" class="btn btn-primary btn-xl">Arlana</a>
            <div class="search-box">
                <input type="text" autocomplete="off" id="myInput" onkeyup="myFunction()" placeholder="Search classes..." />
                <div class="result"></div>
            </div>
        </div>
        <div class="container">
            <table border="3" class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Class</th>
                        <th scope="col">Instructor</th>
                        <th scope="col">Starting Time</th>
                        <th scope="col">Ending Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "Select * from tbltimetable ORDER BY date='Sunday', date='Saturday', date='Friday', date='Thursday', date='Wednesday', date='Tuesday', date='Monday', start ";
                    $result = mysqli_query($link, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr onclick='test()'><td>" . $row["date"] . "</td><td>" . $row["class"] . "</td><td>" . $row["instructor_name"] .  "</td>
        <td>" . $row["start"] . "</td><td>" . $row["finish"] . "</td></tr>";
                        }
                        echo "</table>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="text-center">
            <h2>Want to find out more or book a class?</h2>
            <p style="color: white"> Call 01666 822 615 or email info@metrogym.co.uk</p>
            <button class="btn btn-primary btn-xl" onclick="contact()">GET IN TOUCH</button>
        </div>

    </section>
    <section class="work_day">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="item">
                        <div class="date">thursday 5/10/2020</div>
                        <div class="image"><img src="https://images.pexels.com/photos/416778/pexels-photo-416778.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="img-responsive"></div>
                        <p>Go hardcore in this CTC-based program. Use all stations plus suspension trainers, medicine balls
                            and bands to crush your 6-pack!</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="item">
                        <div class="date">friday 5/11/2020</div>
                        <div class="image"><img src="https://images.pexels.com/photos/841130/pexels-photo-841130.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="img-responsive"></div>
                        <p>Calorie burning cardio and pilates based toning combine to maximize your fat burning potential.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="item">
                        <div class="date">saturday 5/12/2020</div>
                        <div class="image"><img src="https://images.pexels.com/photos/414029/pexels-photo-414029.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="img-responsive"></div>
                        <p>A high energy; high impact blend of kicks and punches set to upbeat music. The perfect combination
                            of martial arts, boxing and cardiovascular training.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="item">
                        <div class="date">Sunday 5/13/2020</div>
                        <div class="image"><img src="https://images.pexels.com/photos/917653/pexels-photo-917653.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="img-responsive"></div>
                        <p>The perfect core strengthening solution: concentrated ab-centric floorwork paired with deep
                            restorative stretching.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include('../group/global/makeFooter.php');
    include('../group/global/makeScript.php');
    echo makeFooter();
    echo makeScript();
    ?>
</body>