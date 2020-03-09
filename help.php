<?php
include('makeHeader.php');
include('makeNav.php');
echo makeHeader();
echo makeNav();
?>

<!-- Contact -->
<div class="w3-center w3-padding-64" id="contact">
  <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Contact Us</span>
</div>

<form class="w3-container" action="/action_page.php" target="_blank">
  <div class="w3-section">
    <label>Name</label>
    <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Name" required>
  </div>
  <div class="w3-section">
    <label>Email</label>
    <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Email" required>
  </div>
  <div class="w3-section">
    <label>Subject</label>
    <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Subject" required>
  </div>
  <div class="w3-section">
    <label>Message</label>
    <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Message" required>
  </div>
  <button type="submit" class="w3-button w3-block w3-black">Send</button>
</form>

</div>
</div>
</div>

<!-- Footer -->
<?php
include('makeFooter.php');
echo makeFooter();
?>