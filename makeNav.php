<?php
function makeNav()
{
  $nav = <<<NAV
    <nav>
    <div class="center">
      <ul>
        <a href="index.php"><img class="logo" src="resources/images/logo.png"></a>
        <li><a href="membership.php"></i></i>Gym Membership</a></li>
        <li><a href="gym.php"></i>Gym Near Me</a></li>
        <li><a href="classes.php"></i>Fitness Classes</a></li>
        <li><a href="news.php"></i>News</a></li>
        <li><a href="help.php"></i>Help</a></li>
        <li><a href="membership.php"></i>Join Now</a></li>
      </ul>
    </div>
  </nav>

<div class="content-divider"></div>
<div class="center">
NAV;
  return $nav;
}
