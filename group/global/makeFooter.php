<?php
function makeFooter()
{
  $footer = <<<FOOTER
    <section class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-12">
          <div class="title">
            <h3>Where <span>are we</span></h3>
          </div>
          <p>
          <span>Northumbria University</span>
          <span>Sutherland Building</span>
          <span>Newcastle-upon-Tyne,</br> NE1 8ST</span>
          </p>
          <p>
            <span>Phone: <b><a href="tel:0191 227 4646">0191 227 4646</a></b></span>
            <span>email: <b><a href="mailto:contact@metrogym.co.uk">contact@metrogym.co.uk</a></b></span>
          </p>
        </div>
        <div class="col-md-3 col-sm-12">
          <div class="title">
            <h3>gift <span>cards</span></h3>
          </div>
          <p>Give the gift of fitness. Gift cards and certificates can be used at any US location for spa services,
            personal training, pilates classes, The Shop and more.</p>
        </div>
        <div class="col-md-3 col-sm-12">
          <div class="title">
            <h3>Start <span>today</span></h3>
          </div>
          <p>Let's get started!<br>
            Call for an appointment today!
          </p>
        </div>
        <div class="col-md-3 col-sm-12">
          <div class="title">
            <h3>free <span>Trial</span></h3>
          </div>
          <p>No committment. Free 14 day trial pass on your first visit.</p>
        </div>
      </div>

      <!-- Social buttons -->
      <ul class="list-unstyled list-inline text-center">
          <li class="list-inline-item">
              <a class="btn-floating btn-fb btn-lg mx-1">
                  <i class="fa fa-facebook"> </i>
              </a>
          </li>
          <li class="list-inline-item">
              <a class="btn-floating btn-tw btn-lg mx-1">
                  <i class="fa fa-twitter"> </i>
              </a>
          </li>
          <li class="list-inline-item">
              <a class="btn-floating btn-gplus btn-lg mx-1">
                  <i class="fa fa-google-plus"> </i>
              </a>
          </li>
      </ul>

      <div style="color:#4c4c4c; padding-top: 30px;">© 2020, MetroGym. A website made by Lewis, Brandon, Arlana, Oliver.
      </div>
    </div>
  </section>


  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>



</body>

</html>
FOOTER;
  return $footer;
}
?>