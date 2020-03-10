<?php
include('makeHeader.php');

echo makeHeader();
?>

<body id="page-top" class="page coaches">
   <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand logo" href="index.php"><span style="font-weight:200; color:white;">Metro</span><span style="font-weight:700; color:#37ecba;">Gym</span></a>
         </div>
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
               <li>
                  <a class="page-scroll" href="index.php">Home</a>
               </li>
               <li class="active">
                  <a class="page-scroll" href="pricing.php">Pricing</a>
               </li>
               <li>
                  <a class="page-scroll" href="schedule.php">Schedule</a>
               </li>
               <li>
                  <a class="page-scroll" href="coaches.php">Coaches</a>
               </li>
               <li>
                  <a class="page-scroll" href="about.php">About</a>
               </li>
               <li>
                  <a class="page-scroll" href="contact.php">Contact</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>
   <section class="about_coach">
      <div class="text-center">
         <h1>Our Packages</h1>
      </div>
      <div class="container">
         <div class="row">
            <div style="text-align: center;">
               <p>MEMBER BENEFITS</p>
               <br>
               <p>New MetroGym members receive a complimentary MetroGym fitness gear and our personal assessment.
                  <br>
                  Personal Training session and Studio Pilates session also included.
               </p>
               <br>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4 col-sm-4">
               <div class="price-box">
                  <p style="font-weight: 700; border-bottom: 1px solid white; padding-bottom: 7px; color: #c1a77d;">
                     Bronze Package</p>
                  <p>Access to all amenities and classes.</p>
                  <p style="font-weight: 700; padding-top: 20px;">$100.00 /Month</p>
                  <p>May dues $100.00</p>
                  <p>Initiation fee $200.00</p>
                  <p style="font-weight: 700;">Promotional savings (-$150.00)</p>
                  <p>Total Due Today</p>
                  <p style="font-weight: 700; padding-top: 10px;">$150.00</p>
               </div>
            </div>
            <div class="col-md-4 col-sm-4">
               <div class="price-box">
                  <p style="font-weight: 700; border-bottom: 1px solid white; padding-bottom: 7px; color: #bcbcbc;">
                     Silver Package</p>
                  <p>Access to all amenities and classes.</p>
                  <p style="font-weight: 700; padding-top: 20px;">$150.00 /Month</p>
                  <p>May dues $150.00</p>
                  <p>Initiation fee $200.00</p>
                  <p style="font-weight: 700;">Promotional savings (-$150.00)</p>
                  <p>Total Due Today</p>
                  <p style="font-weight: 700; padding-top: 10px;">$200.00</p>
               </div>
            </div>
            <div class="col-md-4 col-sm-4">
               <div class="price-box">
                  <p style="font-weight: 700; border-bottom: 1px solid white; padding-bottom: 7px; color: #e8ac35;">Gold
                     Package</p>
                  <p>Access to all amenities and classes.</p>
                  <p style="font-weight: 700; padding-top: 20px;">$200.00 /Month</p>
                  <p>May dues $200.00</p>
                  <p>Initiation fee $200.00</p>
                  <p style="font-weight: 700;">Promotional savings (-$150.00)</p>
                  <p>Total Due Today</p>
                  <p style="font-weight: 700; padding-top: 10px;">$250.00</p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4 col-sm-4">
               <div class="price-box">
                  <input type="submit" class="btn btn-primary btn-xl" value="Select">
               </div>
            </div>
            <div class="col-md-4 col-sm-4">
               <div class="price-box">
                  <input type="submit" class="btn btn-primary btn-xl" value="Select">
               </div>
            </div>
            <div class="col-md-4 col-sm-4">
               <div class="price-box">
                  <input type="submit" class="btn btn-primary btn-xl" value="Select">
               </div>
            </div>
         </div>
   </section>
   <?php
   include('makeFooter.php');

   echo makeFooter();
   ?>