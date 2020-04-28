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
          <a class="navbar-brand logo" href="/teamproject/index.php"><span style="font-weight:200; color:white;">Metro</span><span
                style="font-weight:700; color:#37ecba;">Gym</span></a>
       </div>
       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-left">
             <li>
                <a class="page-scroll" href="/teamproject/index.php">Home</a>
             </li>
             <li>
                <a class="page-scroll" href="/teamproject/group/pricing.php">Pricing</a>
             </li>
             <li>
                <a class="page-scroll" href="/teamproject/classes/classes.php">Classes</a>
             </li>
             <li>
                <a class="page-scroll" href="/teamproject/group/coaches.php">Coaches</a>
             </li>
             <li>
               <a class="page-scroll" href="/teamproject/group/forum.php">Forum</a>
            </li> 
             <li>
                <a class="page-scroll" href="/teamproject/group/about.php">About</a>
             </li>
             <li>
                <a class="page-scroll" href="/teamproject/group/contact.php">Contact</a>
             </li>
             <li>
                <a class="page-scroll" href="/teamproject/group/register.php">Register</a>
             </li>
             <li>
               <a class="page-scroll" href="/teamproject/group/login.php">Login</a>
             </li>
             <li>
               <a class="page-scroll" href="/teamproject/admin/admin.php">Admin</a>
             </li> 

          </ul>
       </div>
    </div>
 </nav>
NAV;
   return $nav;
}
