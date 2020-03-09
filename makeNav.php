<?php
function makeNav()
{
    $nav = <<<NAV
    <nav>
    <div class="center">
      <ul>
        <a href="index.html"><img class="logo" src="resources/images/logo.png"></a>
        <li><a href="index.html"></i>Home</a></li>
        <li><a href="login.html"></i></i>Join Now</a></li>
        <li><a href="classes.html"></i>Classes</a></li>
        <li><a href="forum.html"></i>Forum</a></li>
        <li><a href="contact.html"></i>Contact</a></li>
        <li><a href="about.html"></i>About</a></li>
      </ul>
    </div>
  </nav>
NAV;
    return $nav;
}
