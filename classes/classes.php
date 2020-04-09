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
        </div>
        <div class="container">
            <table class="table">
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
                <tbody>
                    <tr>
                        <th class="row hidden-lg">Monday</th>
                        <th scope="row">7:00 - 7:45</th>
                        <td>
                            <div class="group">indoor <span>7:00 - 7:45</span></div>
                        </td>
                        <td>
                            <div class="kid">outdoor <span>7:00 - 7:45</span></div>
                        </td>
                        <td>
                            <div class="group">outdoor <span>7:00 - 7:45</span></div>
                        </td>
                        <td>
                            <div class="personal">indoor <span>7:00 - 7:45</span></div>
                        </td>
                        <td>
                            <div class="personal">cycling <span>7:00 - 7:45</span></div>
                        </td>
                        <td>
                            <div class="kid">yoga <span>7:00 - 7:45</span></div>
                        </td>
                        <td>
                            <div class="outdoor">cycling <span>7:00 - 7:45</span></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="row hidden-lg">Monday</th>
                        <th scope="row">8:00 - 8:45</th>
                        <td>
                            <div class="personal">outdoor <span>8:00 - 8:45</span></div>
                        </td>
                        <td>
                            <div class="group">indoor <span>8:00 - 8:45</span></div>
                        </td>
                        <td>
                            <div class="outdoor">outdoor <span>8:00 - 8:45</span></div>
                        </td>
                        <td>
                            <div class="outdoor">indoor <span>8:00 - 8:45</span></div>
                        </td>
                        <td>
                            <div class="kid">indoor <span>8:00 - 8:45</span></div>
                        </td>
                        <td>
                            <div class="outdoor">yoga <span>8:00 - 8:45</span></div>
                        </td>
                        <td>
                            <div class="outdoor">cycling <span>8:00 - 8:45</span></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="row hidden-lg">Monday</th>
                        <th scope="row">9:00 - 9:45</th>
                        <td>
                            <div class="personal">pilates <span>9:00 - 9:45</span></div>
                        </td>
                        <td>
                            <div class="outdoor">indoor <span>9:00 - 9:45</span></div>
                        </td>
                        <td>
                            <div class="group">outdoor <span>9:00 - 9:45</span></div>
                        </td>
                        <td>
                            <div class="kid">indoor <span>9:00 - 9:45</span></div>
                        </td>
                        <td>
                            <div class="outdoor">indoor <span>9:00 - 9:45</span></div>
                        </td>
                        <td>
                            <div class="outdoor">yoga <span>9:00 - 9:45</span></div>
                        </td>
                        <td>
                            <div class="group">cycling <span>9:00 - 9:45</span></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="row hidden-lg">Monday</th>
                        <th scope="row">10:00 - 10:45</th>
                        <td>
                            <div class="outdoor">cycling <span>10:00 - 10:45</span></div>
                        </td>
                        <td>
                            <div class="personal">pilates <span>10:00 - 10:45</span></div>
                        </td>
                        <td>
                            <div class="group">outdoor <span>10:00 - 10:45</span></div>
                        </td>
                        <td>
                            <div class="group">indoor <span>10:00 - 10:45</span></div>
                        </td>
                        <td>
                            <div class="outdoor">pilates <span>10:00 - 10:45</span></div>
                        </td>
                        <td>
                            <div class="kid">yoga <span>10:00 - 10:45</span></div>
                        </td>
                        <td>
                            <div class="group">pilates <span>10:00 - 10:45</span></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="row hidden-lg">Monday</th>
                        <th scope="row">11:00 - 12:45pm</th>
                        <td>
                            <div class="personal">outdoor <span>11:00 - 12:45</span></div>
                        </td>
                        <td>
                            <div class="group">indoor <span>11:00 - 12:45</span></div>
                        </td>
                        <td>
                            <div class="outdoor">outdoor <span>11:00 - 12:45</span></div>
                        </td>
                        <td>
                            <div class="outdoor">indoor <span>11:00 - 12:45</span></div>
                        </td>
                        <td>
                            <div class="kid">indoor <span>11:00 - 12:45</span></div>
                        </td>
                        <td>
                            <div class="outdoor">yoga <span>11:00 - 12:45</span></div>
                        </td>
                        <td>
                            <div class="outdoor">cycling <span>1:00 - 12:45</span></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="row hidden-lg">Monday</th>
                        <th scope="row">1:00pm - 2:45pm</th>
                        <td>
                            <div class="outdoor">cycling <span>1:00 - 2:45</span></div>
                        </td>
                        <td>
                            <div class="personal">pilates <span>1:00 - 2:45</span></div>
                        </td>
                        <td>
                            <div class="group">outdoor <span>1:00 - 2:45</span></div>
                        </td>
                        <td>
                            <div class="group">indoor <span>1:00 - 2:45</span></div>
                        </td>
                        <td>
                            <div class="outdoor">pilates <span>1:00 - 2:45</span></div>
                        </td>
                        <td>
                            <div class="kid">yoga <span>1:00 - 2:45</span></div>
                        </td>
                        <td>
                            <div class="group">pilates <span>1:00 - 2:45</span></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="row hidden-lg">Monday</th>
                        <th scope="row">3:00pm - 3:45pm</th>
                        <td>
                            <div class="group">indoor <span>3:00 - 3:45</span></div>
                        </td>
                        <td>
                            <div class="kid">outdoor <span>3:00 - 3:45</span></div>
                        </td>
                        <td>
                            <div class="group">outdoor <span>3:00 - 3:45</span></div>
                        </td>
                        <td>
                            <div class="personal">indoor <span>3:00 - 3:45</span></div>
                        </td>
                        <td>
                            <div class="personal">cycling <span>3:00 - 3:45</span></div>
                        </td>
                        <td>
                            <div class="kid">yoga <span>3:00 - 7:45</span></div>
                        </td>
                        <td>
                            <div class="outdoor">cycling <span>3:00 - 3:45</span></div>
                        </td>
                    </tr>
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