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
          <li>
            <a class="page-scroll" href="pricing.php">Pricing</a>
          </li>
          <li>
            <a class="page-scroll" href="schedule.php">Schedule</a>
          </li>
          <li class="active">
            <a class="page-scroll" href="coaches.php">Coaches</a>
          </li>
          <li>
            <a class="page-scroll" href="forum.php">Forum</a>
          </li>
          <li>
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

  <section class="about_coach">
    <div class="text-center">
      <h1>Our Coaches</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3">
          <img src="https://images.pexels.com/photos/209906/pexels-photo-209906.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="img-responsive" alt="">
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="info">
            <p><b>Willard Nye</b></p>
            <p>Willard started in traditional martial arts but took up "western-style" wrestling, boxing, and Mixed
              Martial Arts (MMA) over 20 years ago. His background in competitive endurance sports also makes him the
              house authority on training methodology and practices. </p>
          </div>
        </div>

        <div class="col-md-3 col-sm-3">
          <img src="https://images.pexels.com/photos/700403/pexels-photo-700403.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="img-responsive" alt="">
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="info">
            <p><b>Moe Smith</b></p>
            <p>A boxing historian and collector, Moe knows all the stories worth telling. He also has a keen interest in
              exercise physiology and is always on the hunt or the newest and most progressive training techniques. </p>
          </div>
        </div>
      </div>

      <div class="row" style="margin-top:50px;">
        <div class="col-md-3 col-sm-3">
          <img src="https://images.pexels.com/photos/209895/pexels-photo-209895.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="img-responsive" alt="">
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="info">
            <p><b>Sarah Joel</b></p>
            <p>Sarah is a MMA practitioner and expert in traditional Filipino and Chinese Martial Arts. Her educational
              background in educational theory means her classes are expertly structured to get the most out of session.
            </p>
          </div>
        </div>

        <div class="col-md-3 col-sm-3">
          <img src="https://images.pexels.com/photos/896061/pexels-photo-896061.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="img-responsive" alt="">
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="info">
            <p><b>Adrian William</b></p>
            <p>Adrian is a longtime student of MetroGym. He exhibits a sophisticated understanding of the theoretical
              underpinnings of the gym methodology and theoretical framework. </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  include('makeFooter.php');
  echo makeFooter();
  ?>