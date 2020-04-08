<?php
include('makeHeader.php');
echo makeHeader();
?>

<body id="page-top" class="page about">
   <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation here is a change</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand logo" href="index.php"><span style="font-weight:200; color:white;">Metro</span><span style="font-weight:700; color:#37ecba;">Gym</span></a>
         </div>
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
               <li>
                  <a class="page-scroll" href="index.php">Home</a>
               </li>
               <li>
                  <a class="page-scroll" href="pricing.php">Pricing</a>
               </li>
               <li>
                  <a class="page-scroll" href="schedule.php">Schedule</a>
               </li>
               <li>
                  <a class="page-scroll" href="coaches.php">Coaches</a>
               </li>
               <li>
                  <a class="page-scroll" href="forum.php">Forum</a>
               </li>
               <li class="active">
                  <a class="page-scroll" href="about.php">About</a>
               </li>
               <li>
                  <a class="page-scroll" href="contact.php">Contact</a>
               </li>
               <li>
                  <a class="page-scroll" href="login.php">Login</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>
   <section class="about_cont">
      <div class="container">
         <div class="row">
            <div class="col-md-12" style="margin:50px 0; text-align: center;">
               <video height="400" autoplay muted loop id="myVideo">
                  <source src="video.mp4" type="video/mp4">
               </video>
               <h4>How did MetroGym begin?</h4>
               <p style="padding-bottom: 20px;">Because jill gave us the task idea</p>
               <h4>What is our vision?</h4>
               <p>Some may call it a vision, but for us, it’s a way of life. It’s our Monday-thru-every-day mantra.
                  <br>An unfiltered philosophy that drives us to create a community and a gym for all.</p>
               <p>No judgments means room for everyone, regardless of shape, size, age, race, gender or fitness level.
                  <br>No matter your workout of choice, we want you to feel good while reaching your goals. Join the
                  fun.</p>
            </div>
         </div>
      </div>
   </section>
   <?php
   include('makeFooter.php');
   echo makeFooter();
   ?>