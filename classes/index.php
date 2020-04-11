<html>
<head>
    <link href="/teamproject/classes/calender.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<?php
include './Calender.php';
include './Booking.php';
include './BookableCell.php';
 
 
$booking = new Booking(
    'VjP6aCbRgh',
    'remotemysql.com',
    'VjP6aCbRgh',
    'kL9UBjIFSu'
);
 
$bookableCell = new BookableCell($booking);
 
$calendar = new Calendar();
 
$calendar->attachObserver('showCell', $bookableCell);
 
$bookableCell->routeActions();
 
echo $calendar->show();
?>
</body>
</html>