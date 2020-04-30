
<?php
function makeBooking()
{
    $booking = <<<BOOKING
            <div class="text-center">
                <h2 style="color: white">Want to find out more or have a question?</h2>
                <p style="color: white"> Call 01666 822 615 or email info@metrogym.co.uk</p>
                <button class="btn btn-primary btn-xl" onclick="window.open('/teamproject/group/contact.php')">GET IN TOUCH</button>
            </div>
    BOOKING;
    return $booking;
}
