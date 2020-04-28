<?php
include('global/makeHeader.php');
include('global/makeNav.php');
echo makeHeader();
echo makeNav();
?>

<body id="page-top" class="page pricing">
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
                  <p style="font-weight: 700; padding-top: 20px;">£100.00 /Month</p>
                  <p>May dues £100.00</p>
                  <p>Initiation fee £200.00</p>
                  <p style="font-weight: 700;">Promotional savings (-£150.00)</p>
                  <p>Total Due Today</p>
                  <p style="font-weight: 700; padding-top: 10px;">£150.00</p>
               </div>
            </div>
            <div class="col-md-4 col-sm-4">
               <div class="price-box">
                  <p style="font-weight: 700; border-bottom: 1px solid white; padding-bottom: 7px; color: #bcbcbc;">
                     Silver Package</p>
                  <p>Access to all amenities and classes.</p>
                  <p style="font-weight: 700; padding-top: 20px;">£150.00 /Month</p>
                  <p>May dues £150.00</p>
                  <p>Initiation fee £200.00</p>
                  <p style="font-weight: 700;">Promotional savings (-£150.00)</p>
                  <p>Total Due Today</p>
                  <p style="font-weight: 700; padding-top: 10px;">£200.00</p>
               </div>
            </div>
            <div class="col-md-4 col-sm-4">
               <div class="price-box">
                  <p style="font-weight: 700; border-bottom: 1px solid white; padding-bottom: 7px; color: #e8ac35;">Gold
                     Package</p>
                  <p>Access to all amenities and classes.</p>
                  <p style="font-weight: 700; padding-top: 20px;">£200.00 /Month</p>
                  <p>May dues £200.00</p>
                  <p>Initiation fee £200.00</p>
                  <p style="font-weight: 700;">Promotional savings (-£150.00)</p>
                  <p>Total Due Today</p>
                  <p style="font-weight: 700; padding-top: 10px;">£250.00</p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4 col-sm-4">
               <div class="price-box">
                  <input onclick="redirect()" type="submit" class="btn btn-primary btn-xl" value="Select" id="membershipBtn">
               </div>
            </div>
            <div class="col-md-4 col-sm-4">
               <div class="price-box">
                  <input onclick="redirect()" type="submit" class="btn btn-primary btn-xl" value="Select" id="membershipBtn">
               </div>
            </div>
            <div class="col-md-4 col-sm-4">
               <div class="price-box">
                  <input onclick="redirect()" type="submit" class="btn btn-primary btn-xl" value="Select" id="membershipBtn">
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

<script>

   function redirect()
   {
      document.location.href = '/teamproject/membership/membership.php';
   }
</script>