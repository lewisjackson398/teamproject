<?php
include('../group/global/makeHeader.php');
echo makeHeader();
?>

<body id="page-top" class="page page_schedule">
    <?php include('../group/global/makeNav.php');
    echo makeNav();
    ?>

    <section class="schedule">
        <div class="text-center">
            <h2>schedule</h2>
        </div>
        <div class="buttons text-center">
            <a href="#" id="choice-all" class="btn btn-primary btn-xl">All Coaches</a>
            <a href="#" id="choice-group" class="btn btn-primary btn-xl">Willard</a>
            <a href="#" id="choice-kid" class="btn btn-primary btn-xl">Moe</a>
            <a href="#" id="choice-personal" class="btn btn-primary btn-xl">Sarah</a>
            <a href="#" id="choice-outdoor" class="btn btn-primary btn-xl">Adrian</a>
            <div class="search-box">
                <input type="text" autocomplete="off" id="myInput" onkeyup="myFunction()" placeholder="Search classes..." />
                <div class="result"></div>
            </div>
        </div>
        <div class="container">
            <table class="table">
                <thead class="hidden-xs">
                    <tr>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                        <th>Saturday</th>
                        <th>Sunday</th>
                    </tr>
                </thead>
                <tbody id="test">
                        <?php
                        include('../server/config/config.php');
                        $sql = "Select * from tbltimetable ORDER BY start";
                        $result = mysqli_query($link, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr><td>" . $row["class"] . "<br>" . $row["description"] . "<br>"  . $row["start"]  . "<br>"  . $row["finish"]. "</td>";
                                echo "<td>" . $row["class"] . "<br>" . $row["description"] . "<br>"  . $row["start"]  . "<br>"  . $row["finish"]. "</td>";
                                echo "<td>" . $row["class"] . "<br>" . $row["description"] . "<br>"  . $row["start"]  . "<br>"  . $row["finish"]. "</td>";
                                echo "<td>" . $row["class"] . "<br>" . $row["description"] . "<br>"  . $row["start"]  . "<br>"  . $row["finish"]. "</td>";
                                echo "<td>" . $row["class"] . "<br>" . $row["description"] . "<br>"  . $row["start"]  . "<br>"  . $row["finish"]. "</td>";
                                echo "<td>" . $row["class"] . "<br>" . $row["description"] . "<br>"  . $row["start"]  . "<br>"  . $row["finish"]. "</td>";
                                echo "<td>" . $row["class"] . "<br>" . $row["description"] . "<br>"  . $row["start"]  . "<br>"  . $row["finish"]. "</td></tr>";
                            }
                        }
                        ?>
                </tbody>
            </table>
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