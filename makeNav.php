<?php
function makeNav()
{
   $nav = <<<NAV
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
       <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
             data-target="#bs-example-navbar-collapse-1">
             <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand logo" href="index.php"><span style="font-weight:200; color:white;">Metro</span><span
                style="font-weight:700; color:#37ecba;">Gym</span></a>
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
                <a class="page-scroll" href="about.php">About</a>
             </li>
             <li>
                <a class="page-scroll" href="contact.php">Contact</a>
             </li>
             <li>
                <a class="page-scroll" href="register.php">Register</a>
             </li>
             <li>
               <a class="page-scroll" href="login.php">Login</a>
             </li>
          </ul>
       </div>
    </div>
 </nav>
NAV;
   return $nav;
}
