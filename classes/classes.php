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
                                <div class="lewis">Beginner<span>7:00 - 7:45</span></div>
                            </td>
                            <td>
                                <div class="lewis"><a href="class_types/zumba.php">Zumba<span>7:00 - 7:45</span></a></div>
                            </td>
                            <td>
                                <div class="brandon">Beach Body<span>7:00 - 7:45</span></div>
                            </td>
                            <td>
                                <div class="arlana">Spirit Cycle <span>7:00 - 7:45</span></div>
                            </td>
                            <td>
                                <div class="brandon">Hot Yoga <span>7:00 - 7:45</span></div>
                            </td>
                            <td>
                    
                            </td>
                            <td>
                                <div class="oliver">Beginner <span>7:00 - 7:45</span></div>
                            </td>
                        </tr>
                        <tr>
                            <th class="row hidden-lg"></th>
                            <th scope="row">8:00 - 9:00am</th>
                            <td>
                                <div class="oliver">Zumba <span>8:00 - 8:45</span></div>
                            </td>
                            <td>
                                <div class="brandon">Beach Body <span>8:00 - 8:45</span></div>
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                <div class="oliver">Beach Body <span>8:00 - 8:45</span></div>
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                <div class="brandon">Beginner <span>8:00 - 8:45</span></div>
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
                                <div class="oliver">Zumba <span>9:00 - 9:45</span></div>
                            </td>
                            <td>
                                <div class="brandon">Beach Body <span>9:00 - 9:45</span></div>
                            </td>
                            <td>
                                <div class="oliver">Beach Body <span>9:00 - 9:45</span></div>
                            </td>
                            <td>
                                <div class="lewis">Hot yoga <span>9:00 - 9:45</span></div>
                            </td>
                            <td>
                                <div class="lewis">Beginner <span>9:00 - 9:45</span></div>
                            </td>
                        </tr>
                        <tr>
                            <th class="row hidden-lg"></th>
                            <th scope="row">10:00 - 11:00am</th>
                            <td>
                                <div class="brandon">Beginner <span>10:00 - 10:45</span></div>
                            </td>
                            <td>
                                <div class="lewis">Spirit cycle <span>10:00 - 10:45</span></div>
                            </td>
                            <td>
                                <div class="arlana">Zumba <span>10:00 - 10:45</span></div>
                            </td>
                            <td>
                                <div class="oliver">Beach Body <span>10:00 - 10:45</span></div>
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                <div class="oliver">Hot yoga <span>10:00 - 10:45</span></div>
                            </td>
                            <td>
                                
                            </td>
                        </tr>
                        <tr>
                            <th class="row hidden-lg"></th>
                            <th scope="row">10:00 - 11:00pm</th>
                            <td>
                                <div class="arlana">Zumba <span>11:00 - 12:45</span></div>
                            </td>
                            <td>
                                <div class="lewis">Beach Body <span>11:00 - 12:45</span></div>
                            </td>
                            <td>
                                <div class="brandon">Zumba <span>11:00 - 12:45</span></div>
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                <div class="lewis">Beach Body <span>11:00 - 12:45</span></div>
                            </td>
                            <td>
                                <div class="oliver">Hot yoga <span>11:00 - 12:45</span></div>
                            </td>
                            <td>
                                
                            </td>
                        </tr>
                        <tr>
                            <th class="row hidden-lg"></th>
                            <th scope="row">11:00pm - 12:00pm</th>
                            <td>
                                
                            </td>
                            <td>
                                <div class="arlana">Spirit cycle <span>1:00 - 2:45</span></div>
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                <div class="oliver">Beach Body <span>1:00 - 2:45</span></div>
                            </td>
                            <td>
                                <div class="brandon">Spirit cycle <span>1:00 - 2:45</span></div>
                            </td>
                            <td>
                                <div class="lewis">Got yoga <span>1:00 - 2:45</span></div>
                            </td>
                            <td>
                                
                            </td>
                        </tr>
                        <tr>
                            <th class="row hidden-lg"></th>
                            <th scope="row">12:00pm - 1:00pm</th>
                            <td>
                                <div class="lewis">Beach Body <span>3:00 - 3:45</span></div>
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                <div class="arlana">Zumba <span>3:00 - 3:45</span></div>
                            </td>
                            <td>
                                <div class="oliver">Beach Body <span>3:00 - 3:45</span></div>
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                <div class="oliver">Hot yoga <span>3:00 - 7:45</span></div>
                            </td>
                            <td>
                                <div class="oliver">Beginner <span>3:00 - 3:45</span></div>
                            </td>
                        </tr>
                        <tr>
                            <th class="row hidden-lg"></th>
                            <th scope="row">1:00pm - 2:00pm</th>
                            <td>
                                <div class="lewis">Beach Body <span>3:00 - 3:45</span></div>
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                <div class="arlana">Zumba <span>3:00 - 3:45</span></div>
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                <div class="oliver">Hot yoga <span>3:00 - 7:45</span></div>
                            </td>
                            <td>
                                <div class="oliver">Beginner <span>3:00 - 3:45</span></div>
                            </td>
                        </tr>
                        <tr>
                            <th class="row hidden-lg"></th>
                            <th scope="row">2:00pm - 3:00pm</th>
                            <td>
                               
                            </td>
                            <td>
                                <div class="brandon">Zumba <span>3:00 - 3:45</span></div>
                            </td>
                            <td>
                                <div class="arlana">Zumba <span>3:00 - 3:45</span></div>
                            </td>
                            <td>
                               
                            </td>
                            <td>
                                <div class="lewis">Beginner <span>3:00 - 3:45</span></div>
                            </td>
                            <td>
                                <div class="oliver">Hot yoga <span>3:00 - 7:45</span></div>
                            </td>
                            <td>
                                <div class="oliver">Beginner <span>3:00 - 3:45</span></div>
                            </td>
                        </tr>
                        <tr>
                            <th class="row hidden-lg"></th>
                            <th scope="row">3:00pm - 4:00pm</th>
                            <td>
                                <div class="lewis">Beach Body <span>3:00 - 3:45</span></div>
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                <div class="arlana">Zumba <span>3:00 - 3:45</span></div>
                            </td>
                            <td>
                                <div class="oliver">Beach Body <span>3:00 - 3:45</span></div>
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                <div class="oliver">Hot yoga <span>3:00 - 7:45</span></div>
                            </td>
                            <td>
                                <div class="oliver">Beginner <span>3:00 - 3:45</span></div>
                            </td>
                        </tr>
                        <tr>
                            <th class="row hidden-lg"></th>
                            <th scope="row">4:00pm - 5:00pm</th>
                            <td>
                                <div class="lewis">Beach Body <span>3:00 - 3:45</span></div>
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                <div class="arlana">Zumba <span>3:00 - 3:45</span></div>
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                <div class="lewis">Beginner <span>3:00 - 3:45</span></div>
                            </td>
                            <td>
                                <div class="oliver">Hot yoga <span>3:00 - 7:45</span></div>
                            </td>
                            <td>
                                
                            </td>
                        </tr>
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
                            <div class="date">thursday 5/10/2018</div>
                            <div class="image"><img src="https://images.pexels.com/photos/416778/pexels-photo-416778.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="img-responsive"></div>
                            <p>Go hardcore in this CTC-based program. Use all stations plus suspension trainers, medicine balls and bands to crush your 6-pack!</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="date">friday 5/11/2018</div>
                            <div class="image"><img src="https://images.pexels.com/photos/841130/pexels-photo-841130.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="img-responsive"></div>
                            <p>Calorie burning cardio and Spirit cycle based toning combine to maximize your fat burning potential.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="date">saturday 5/12/2018</div>
                            <div class="image"><img src="https://images.pexels.com/photos/414029/pexels-photo-414029.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="img-responsive"></div>
                            <p>A high energy; high impact blend of kicks and punches set to upbeat music. The perfect combination of martial arts, boxing and cardiovascular training.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="date">Sunday 5/13/2018</div>
                            <div class="image"><img src="https://images.pexels.com/photos/917653/pexels-photo-917653.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="img-responsive"></div>
                            <p>The perfect core strengthening solution: concentrated ab-centric floorwork paired with deep restorative stretching.</p>
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