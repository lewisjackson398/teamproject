<?php
include('makeHeader.php');

echo makeHeader();
?>

<body id="page-top" class="page contact_page">
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
               <li>
                  <a class="page-scroll" href="coaches.php">Coaches</a>
               </li>
               <li>
                  <a class="page-scroll" href="about.php">About</a>
               </li>
               <li class="active">
                  <a class="page-scroll" href="contact.php">Contact</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>
   <section class="contact">
      <div class="map">
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12091.968445934113!2d-73.9833745!3d40.7401991!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xec88233d3a5d270f!2sBaruch+College!5e0!3m2!1sen!2sus!4v1526250779418" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="container">
         <div class="text-center">
            <h2>Drop us a message</h2>
         </div>
         <form id="contact-form" method="post" action="contact.php" role="form">
            <div class="messages"></div>
            <div class="controls">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="form_name">First name *</label>
                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your first name*" required>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="form_lastname">Last name *</label>
                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your last name *" required>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="form_email">Email *</label>
                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="form_phone">Phone</label>
                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone number">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="form_message">Message *</label>
                        <textarea id="form_message" name="message" class="form-control" placeholder="What is it? *" rows="4" required></textarea>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <input type="submit" class="btn btn-primary btn-xl" value="Send message">
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <p class="text-muted"><strong>*</strong> These fields are required.</p>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </section>
   <?php
   include('makeFooter.php');

   echo makeFooter();
   ?>