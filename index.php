<?php
include('group/global/makeHeader.php');
echo makeHeader();
?>

<body id="page-top">
   <?php include('group/global/makeNav.php');
   echo makeNav();
   ?>

   <header>
      <div class="header-content">
         <div class="header-content-inner">
            <h1 id="homeHeading">Unrivaled Fitness.<span>Unparalleled personal training.</span></h1>
            <p>MetroGym is the best gym in the universe.</p>
            <a href="group/about.php" class="btn btn-primary btn-xl page-scroll">More about us</a>
         </div>
      </div>
   </header>

   <section class="work_day">
      <div class="text-center">
         <h2 style="color:white;">MetroGym's workout of the day</h2>
      </div>
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
                     <div class="brandon"><a href="classes/class_types/hot_yoga.php">Hot Yoga <span>7:00 - 7:45</span></a></div>
                  </td>
                  <td>
                     <div class="lewis"><a href="classes/class_types/zumba.php">Zumba<span>7:00 - 7:45</span></a></div>
                  </td>
                  <td>
                     <div class="brandon"><a href="classes/class_types/beach_body.php">Beach Body<span>7:00 - 7:45</span></a></div>
                  </td>
                  <td>
                     <div class="oliver"><a href="classes/class_types/senior.php">Senior Keep Fit<span>7:00 - 7:45</span></a></div>
                  </td>
                  <td>
                     <div class="lewis"><a href="classes/class_types/senior.php">Senior Keep Fit<span>7:00 - 7:45</span></a></div>

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
                     <div class="oliver"><a href="classes/class_types/zumba.php">Zumba <span>8:00 - 8:45</span></a></div>
                  </td>
                  <td>
                     <div class="brandon"><a href="classes/class_types/beach_body.php">Beach Body <span>8:00 - 8:45</span></a></div>
                  </td>
                  <td>

                  </td>
                  <td>

                  </td>
                  <td>
                     <div class="oliver"><a href="classes/class_types/beach_body.php">Beach Body <span>8:00 - 8:45</span></a></div>
                  </td>
                  <td>

                  </td>
                  <td>
                     <div class="brandon"><a href="classes/class_types/senior.php">Senior Keep Fit <span>8:00 - 8:45</span></a></div>
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
                     <div class="oliver"><a href="classes/class_types/zumba.php">Zumba <span>9:00 - 9:45</span></a></div>
                  </td>
                  <td>
                     <div class="brandon"><a href="classes/class_types/beach_body.php">Beach Body <span>9:00 - 9:45</span></a></div>
                  </td>
                  <td>
                     <div class="oliver"><a href="classes/class_types/beach_body.php">Beach Body <span>9:00 - 9:45</span></a></div>
                  </td>
                  <td>

                  </td>
                  <td>
                     <div class="lewis"><a href="classes/class_types/senior.php">Senior Keep Fit <span>9:00 - 9:45</span></a></div>
                  </td>
               </tr>
               <tr>
                  <th class="row hidden-lg"></th>
                  <th scope="row">10:00 - 11:00am</th>
                  <td>
                     <div class="brandon"><a href="classes/class_types/senior.php">Senior Keep Fit <span>10:00 - 10:45</span></a></a></div>
                  </td>
                  <td>
                     <div class="lewis"><a href="class_types/spriit_cycle.php">Spirit cycle <span>10:00 - 10:45</span></div>
                  </td>
                  <td>
                     <div class="arlana"><a href="classes/class_types/zumba.php">Zumba <span>10:00 - 10:45</span></a></div>
                  </td>
                  <td>
                     <div class="oliver"><a href="classes/class_types/beach_body.php">Beach Body <span>10:00 - 10:45</span></a></div>
                  </td>
                  <td>

                  </td>
                  <td>
                     <div class="oliver"><a href="classes/class_types/hot_yoga.php">Hot yoga <span>10:00 - 10:45</span></a></div>
                  </td>
                  <td>

                  </td>
               </tr>
               <tr>
                  <th class="row hidden-lg"></th>
                  <th scope="row">11:00 - 12:00pm</th>
                  <td>
                     <div class="arlana"><a href="classes/class_types/zumba.php">Zumba <span>11:00 - 11:45</span></a></div>
                  </td>
                  <td>
                     <div class="lewis"><a href="classes/class_types/beach_body.php">Beach Body <span>11:00 - 12:00</span></a></div>
                  </td>
                  <td>
                     <div class="brandon"><a href="classes/class_types/zumba.php">Zumba <span>11:00 - 12:00</span></a></div>
                  </td>
                  <td>

                  </td>
                  <td>
                     <div class="lewis"><a href="classes/class_types/beach_body.php">Beach Body <span>11:00 - 11:45</span></a></div>
                  </td>
                  <td>
                     <div class="oliver"><a href="classes/class_types/hot_yoga.php">Hot yoga <span>11:00 - 11:45</span></a></div>
                  </td>
                  <td>

                  </td>
               </tr>
               <tr>
                  <th class="row hidden-lg"></th>
                  <th scope="row">12:00pm - 1:00pm</th>
                  <td>
                     <div class="lewis"><a href="classes/class_types/hot_yoga.php">Hot yoga <span>12:00 - 1:00</span></a></div>
                  </td>
                  <td>
                     <div class="arlana"><a href="classes/class_types/spirit_cycle.php">Spirit cycle <span>12:00 - 12:45</span></a></div>
                  </td>
                  <td>

                  </td>
                  <td>
                     <div class="oliver"><a href="classes/class_types/beach_body.php">Beach Body <span>12:00 - 12:45</span></a></div>
                  </td>
                  <td>
                     <div class="brandon"><a href="classes/class_types/spirit_cycle.php">Spirit cycle <span>12:00 - 1:00</span></a></div>
                  </td>
                  <td>

                  </td>
                  <td>
                     <div class="lewis"><a href="classes/class_types/hot_yoga.php">Hot yoga <span>9:00 - 9:45</span></a></div>
                  </td>
               </tr>
               <tr>
                  <th class="row hidden-lg"></th>
                  <th scope="row">1:00pm - 2:00pm</th>
                  <td>
                     <div class="lewis"><a href="classes/class_types/beach_body.php">Beach Body <span>1:00 - 1:45</span></a></div>
                  </td>
                  <td>

                  </td>
                  <td>
                     <div class="arlana"><a href="classes/class_types/zumba.php">Zumba <span>1:00 - 2:00</span></a></div>
                  </td>
                  <td>
                     <div class="oliver"><a href="classes/class_types/beach_body.php">Beach Body <span>1:00 - 2:00</span></a></div>
                  </td>
                  <td>

                  </td>
                  <td>
                     <div class="oliver"><a href="classes/class_types/spirit_cycle.php">Hot yoga <span>1:00 - 2:00</span></a></div>
                  </td>
                  <td>
                     <div class="oliver"><a href="classes/class_types/senior.php">Senior Keep Fit <span>1:00 - 2:00</span></a></div>
                  </td>
               </tr>
               <tr>
                  <th class="row hidden-lg"></th>
                  <th scope="row">2:00pm - 3:00pm</th>
                  <td>
                     <div class="lewis"><a href="classes/class_types/beach_body.php">Beach Body <span>2:00 - 2:45</span></a></div>
                  </td>
                  <td>

                  </td>
                  <td>
                     <div class="arlana"><a href="classes/class_types/zumba.php">Zumba <span>2:00 - 2:45</span></a></div>
                  </td>
                  <td>

                  </td>
                  <td>

                  </td>
                  <td>
                     <div class="oliver"><a href="classes/class_types/spirit_cycle.php">Hot yoga <span>2:00 - 2:45</span></a></div>
                  </td>
                  <td>
                     <div class="oliver"><a href="classes/class_types/senior.php">Senior Keep Fit <span>2:00 - 3:00</span></a></div>
                  </td>
               </tr>
               <tr>
                  <th class="row hidden-lg"></th>
                  <th scope="row">3:00pm - 4:00pm</th>
                  <td>

                  </td>
                  <td>
                     <div class="brandon"><a href="classes/class_types/spirit_cycle.php">Zumba <span>3:00 - 4:00</span></a></div>
                  </td>
                  <td>
                     <div class="oliver"><a href="classes/class_types/hot_yoga.php">Hot yoga <span>3:00 - 4:00</span></a></div>

                  </td>
                  <td>
                     <div class="arlana"><a href="classes/class_types/zumba.php">Zumba <span>3:00 - 4:00</span></a></div>
                  </td>
                  <td>
                     <div class="lewis"><a href="classes/class_types/senior.php">Senior Keep Fit <span>3:00 - 4:00</span></a></div>
                  </td>
                  <td>

                  </td>
                  <td>
                     <div class="oliver"><a href="classes/class_types/senior.php">Senior Keep Fit <span>3:00 - 4:00</span></a></div>
                  </td>
               </tr>
               <tr>
                  <th class="row hidden-lg"></th>
                  <th scope="row">4:00pm - 5:00pm</th>
                  <td>
                     <div class="oliver"><a href="classes/class_types/senior.php">Senior Keep Fit <span>4:00 - 5:00</span></a></div>

                  </td>
                  <td>
                     <div class="lewis"><a href="classes/class_types/beach_body.php">Beach Body <span>4:00 - 4:45</span></a></div>
                  </td>
                  <td>
                     <div class="arlana"><a href="classes/class_types/zumba.php">Zumba <span>4:00 - 4:45</span></a></div>
                  </td>
                  <td>
                     <div class="oliver"><a href="classes/class_types/beach_body.php">Beach Body <span>4:00 - 5:00</span></a></div>
                  </td>
                  <td>

                  </td>
                  <td>
                     <div class="oliver"><a href="classes/class_types/hot_yoga.php">Hot yoga <span>4:00 - 5:00</span></a></div>
                  </td>
                  <td>

                  </td>
               </tr>
               <tr>
                  <th class="row hidden-lg"></th>
                  <th scope="row">5:00pm - 6:00pm</th>
                  <td>
                     <div class="lewis"><a href="classes/class_types/beach_body.php">Beach Body <span>5:00 - 6:00</span></a></div>
                  </td>
                  <td>

                  </td>
                  <td>
                     <div class="arlana"><a href="classes/class_types/zumba.php">Zumba <span>5:00 - 6:00</span></a></div>
                  </td>
                  <td>

                  </td>
                  <td>
                     <div class="oliver"><a href="classes/class_types/hot_yoga.php">Hot yoga <span>5:00 - 5:45</span></a></div>

                  </td>
                  <td>
                     <div class="lewis"><a href="classes/class_types/senior.php">Senior Keep Fit <span>5:00 - 6:00</span></a></div>
                  </td>
                  <td>

                  </td>
               </tr>
            </tbody>
         </table>
      </div>

      <?php include('classes/includes/make_booking.php');
      echo makeBooking(); ?>

   </section>
   
   <section class="fitness-classes">
      <div class="text-center">
         <h2>Fitness Classes</h2>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
               <div class="service-block">
                  <h1 class="default-title ">Fitness Classes</h1>
                  <p>We offer a variety of classes for everyone. Your wish is our command at MetroGym.</p>
                  <a href="classes/classes.php" class="btn btn-default">View ALL Classes</a>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
               <div class="service-block outline ">
                  <div class="service-icon">
                     <i class="icon-default icon-2"></i>
                  </div>
                  <div class="service-content insideService">
                     <h2 class="service-title "><a href="classes/class_types/senior.php" class="title">Senior Keep Fit</a> </h2>
                     <p>Are you just starting out at MetroGym? We're here for you every step of the way.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
               <div class="service-block outline">
                  <div class="service-icon">
                     <i class="icon-default icon-1"></i>
                  </div>
                  <div class="service-content insideService">
                     <h2 class="service-title"><a href="classes/class_types/zumba.php" class="title">Zumba</a></h2>
                     <p>Pretty much the most awesome workout ever. Dance to great music, with great people.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
               <div class="service-block outline">
                  <div class="service-icon">
                     <i class="icon-default icon-4"></i>
                  </div>
                  <div class="service-content insideService">
                     <h2 class="service-title"><a href="classes/class_types/beach_body.php" class="title">Beach Body</a></h2>
                     <p>Get fit, healthy and lose weight with expert nutrition plans and Beachbody's workout system.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
               <div class="service-block outline ">
                  <div class="service-icon">
                     <i class="icon-default icon-5"></i>
                  </div>
                  <div class="service-content insideService">
                     <h2 class="service-title"><a href="classes/class_types/spirit_cycle.php" class="title">Spirit Cycle</a></h2>
                     <p>Spirit Cycle has revolutionized indoor Beginner and taken the world of fitness by storm.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
               <div class="service-block outline ">
                  <div class="service-icon">
                     <i class="icon-default icon-6"></i>
                  </div>
                  <div class="service-content insideService">
                     <h2 class="service-title"><a href="classes/class_types/hot_yoga.php" class="title">Hot Yoga</a></h2>
                     <p>A vigorous approach to yoga techniques characterized by flowing poses linked to the breath.</p>
                  </div>
               </div>
            </div>
         </div>
   </section>

   <?php
   include('group/global/makeFooter.php');
   include('group/global/makeScript.php');
   echo makeFooter();
   echo makeScript();
   ?>
</body>