<?php
include('server/config/config.php');
include('group/global/makeHeader.php');
include('group/global/makeNav.php');
echo makeHeader();
echo makeNav();
?>

<body id="page-top">
   <header>
      <div class="header-content">
         <div class="header-content-inner">
            <h1 id="homeHeading">Unrivaled Fitness.<span>Unparalleled personal training.</span></h1>
            <p>MetroGym is the best gym in the universe.</p>
            <a href="group/about.php" class="btn btn-primary btn-xl page-scroll">More about us</a>
         </div>
      </div>
   </header>

   <?php
   include('classes/global/make_info.php');
   echo makeInfo();
   ?>
   <section class="schedule">
      <div class="text-center">
         <h2>Class Weekly Schedule</h2>
      </div>
      <br>
      <br>
      <div class="container">
         <div class="row">
            <div class="col-sm-2">
               <div class="makeNav">
                  <?php include('classes/global/make_nav.php');
                  echo makeClassNav();
                  ?>
               </div>
            </div>

            <div class="col-sm-10">
               <div id="search-box">
                  <input type="text" oninput="w3.filterHTML('#timetable', '.item', this.value)" placeholder="Search classes..." />
               </div>
               <table class="table" id="timetable">
                  <thead>
                     <tr id="timetable_row2">
                        <th scope="col">Date</th>
                        <th scope="col">Class</th>
                        <th scope="col">Instructor</th>
                        <th scope="col">Starting Time</th>
                        <th scope="col">Ending Time</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     $sql = "SELECT * FROM tbltimetable ORDER BY date='Sunday', date='Saturday', date='Friday', date='Thursday', date='Wednesday', date='Tuesday', date='Monday', start ";
                     $result = mysqli_query($link, $sql);
                     if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                           echo "<tr class='item'><td class='date'>" . $row["date"] . "</td><td class='class'>" . $row["class"] . "</td><td class='instructor'>" . $row["instructor_name"] .  "</td>
                                    <td class='start'>" . $row["start"] . "</td><td class='finish'>" . $row["finish"] . "</td></tr>";
                        }
                        echo "</table>";
                     }
                     ?>
                  </tbody>

               </table>
            </div>
         </div>
      </div>
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
                     <h2 class="service-title "><a href="classes/class_types/senior.php" class="title">Seniors</a> </h2>
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
                     <h2 class="service-title"><a href="classes/class_types/beach_body.php" class="title">Boxing</a></h2>
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
                     <h2 class="service-title"><a href="classes/class_types/spirit_cycle.php" class="title">Cycling</a></h2>
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
                     <h2 class="service-title"><a href="classes/class_types/hot_yoga.php" class="title">Yoga</a></h2>
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