<?php
include('global/makeHeader.php');
echo makeHeader();
?>


<body id="page-top" class="page contact">
   <?php include('global/makeNav.php');
   echo makeNav();
   ?>
   <section class="contact">
      <div class="container">
         <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1144.8748399462527!2d-1.6079968916224208!3d54.97748883440377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487e70c8a2a4a037%3A0x29992653bff31398!2sNewcastle%20upon%20Tyne%20NE1%208ST!5e0!3m2!1sen!2suk!4v1587373385649!5m2!1sen!2suk" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
         </div>

         <h2>Drop us a message</h2>
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
                     <input type="submit" class="btn btn-success btn-xl" value="Send message">
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
   include('global/makeFooter.php');
   include('global/makeScript.php');
   echo makeFooter();
   echo makeScript();
   ?>
</body>