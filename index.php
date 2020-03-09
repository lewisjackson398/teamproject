<?php
include('makeHeader.php');
include('makeNav.php');
echo makeHeader();
echo makeNav();
?>
<!-- Content -->
<div id="content" style="margin-top:80px;margin-bottom:80px">

  <!-- Slideshow -->
  <div class="w3-container">
    <div class="w3-display-container mySlides">
      <img src="resources/images/gym1.jpeg" style="width:100%">
      <div class="w3-display-topright w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Running</span>
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="resources/images/gym2.jpeg" style="width:100%">
      <div class="w3-display-topright w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Crossfit</span>
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="resources/images/gym3.jpeg" style="width:100%">
      <div class="w3-display-topright w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Strength</span>
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="resources/images/gym4.jpeg" style="width:100%">
      <div class="w3-display-topright w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Kettlebell</span>
      </div>
    </div>
  </div>

  <!-- Slideshow next/previous buttons -->
  <div class="w3-container w3-dark-grey w3-padding w3-xlarge">
    <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
    <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>
  </div>

  <!-- Offers container -->
  <div class="w3-third w3-margin-bottom w3-padding-64">
    <ul class="w3-ul w3-border w3-center w3-hover-shadow">
      <h3>FIND YOUR NEAREST GYM</h3>
      <p>Choose your local PureGym from hundreds of gyms nationwide.</p>
  </div>

  <div class="w3-third w3-margin-bottom w3-padding-64">
    <ul class="w3-ul w3-border w3-center w3-hover-shadow">
      <h3>STUDENT GYM MEMBERSHIPS</h3>
      <p>Save up to 30% off fixed-term memberships.</p>
  </div>

  <div class="w3-third w3-margin-bottom w3-padding-64">
    <ul class="w3-ul w3-border w3-center w3-hover-shadow">
      <h3>NO CONTRACT – LEAVE ANYTIME</h3>
      <p>Our memberships are flexible so it’s easy to leave and join again whenever you want.</p>
  </div>

  <div id="pricing" class="text-center">
    <h2 class="text-white" style="font-size: 48px; font-weight: bold; margin-bottom: 2em; padding-top: 2em;">Pricing</h2>

    <div class="wrapper" style="padding-bottom: 8em;">
      <div class="bg-white">
        <h3 class="price-heading">Basic</h3>
        <h3>$15/Month</h3>
        <h3>Machine Access</h3>
        <h3>1 Trainer</h3>
        <h3>0 Perks</h3>
      </div>

      <div class="bg-white">
        <h3 class="price-heading">In-Depth</h3>
        <h3>$25/Month</h3>
        <h3>Complete Access</h3>
        <h3>2 Trainers</h3>
        <h3>5 Perks</h3>
      </div>

      <div class="bg-white">
        <h3 class="price-heading">Premium</h3>
        <h3>$45/Month</h3>
        <h3>Complete Access</h3>
        <h3>3 Trainers</h3>
        <h3>10 Perks</h3>
      </div>

    </div>
  </div>

</div>
</div>

<!-- Footer -->
<?php
include('makeFooter.php');
echo makeFooter();
?>


<script src="js/script.js"></script>

</body>

</html>