<?php
include('global/makeHeader.php');
echo makeHeader();
?>

<body id="page-top" class="page about">
   <?php include('global/makeNav.php');
   echo makeNav();
   ?>
   <section class="about_cont">
      <div class="container">
         <div class="row">
            <div class="col-md-12" style="margin:50px 0; text-align: center;">
               <video height="400" autoplay muted loop id="myVideo">
                  <source src="/teamproject/resources/videos/video.mp4" type="video/mp4">
               </video>
               <h4>How did MetroGym begin?</h4>
               <p>Our mission is to help people everywhere to lead a healthy and happy life every day. Come and join us today.</p>
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
   include('global/makeFooter.php');
   include('global/makeScript.php');
   echo makeFooter();
   echo makeScript();
   ?>
</body>