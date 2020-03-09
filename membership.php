<?php
include('makeHeader.php');
include('makeNav.php');
echo makeHeader();
echo makeNav();
?>

<link rel="stylesheet" href="resources/css/membership.css">
<main>
    <div class="overlay">
        <div class="hero--background__image image-override" style="background-image:url('https://cdn.pixabay.com/photo/2017/07/15/21/06/reception-2507752_960_720.jpg');">
        </div>
    </div>
    <div id="membership-heading-text" class="text-white">
        <h1>Memberships</h1>
        <p>Select the right membership for you</p>
    </div>

    <p class="padding-2em">
        Whether you’re looking for a classic $10 membership or the additional perks of a PF Black Card®, we’ve got a
        membership option that fits your needs. All Planet Fitness members can enjoy PF-only benefits like fitness
        training and the ability to work out in our Judgement Free Zone® whenever you want, as often as you like.
        PF Black Card® members can make use of additional amenities like bringing a guest for free, use of any PF
        location, unlimited Hydromassage and more. And of course, our friendly club staff are always available to
        offer assistance and cheer you on.
    </p>

    <table>

        <thead>
            <tr>
                <th style="width:40%">Features</th>
                <th>Basic</th>
                <th>Premium</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td></td>
                <td>$15/month<br /><br /><a class="btn cta-btn" href="#">Select</a></td>
                <td>$45/month<br /><br /><a class="btn cta-btn" href="#">Select</a></td>
            </tr>

            <tr>
                <td>Unlimited Access to Home Club</td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>

            <tr>
                <td>Free Fitness Training</td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>

            <tr>
                <td>Free Wifi*</td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>

            <tr>
                <td>Use of Tanning</td>
                <td><i class="fa fa-times"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>

            <tr>
                <td>Unlimited Use of Hydromassage</td>
                <td><i class="fa fa-times"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>

            <tr>
                <td>Unlimited Total Body Enhancement</td>
                <td><i class="fa fa-times"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>

            <tr>
                <td>Unlimited Guest Privileges</td>
                <td><i class="fa fa-times"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>

            <tr>
                <td>Gym Beta Test Access</td>
                <td><i class="fa fa-times"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>

            <tr>
                <td>30% Globe Fitness Merch</td>
                <td><i class="fa fa-times"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>

        </tbody>

    </table>

    <p class="padding-2em font-18px">
        Please check your local club for additional membership types and special promotions. Membership details may
        vary by location.
    </p>
    <p class="padding-2em font-18px">
        *Participating locations only. Pricing may vary by location. See club for details.
    </p>
</main>


<?php
include('makeFooter.php');
echo makeFooter();
?>