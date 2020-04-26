
<?php
function makeClassNav()
{
    $classNav = <<<NAV
    <nav class="classNav">
        <h3 class="text-left" style="color: white";>Classes</h3>
        <li><a href="/teamproject/classes/classes.php">Class Timetable</a></li>
        <li><a href="/teamproject/classes/class_types/hot_yoga.php">Hot Yoga</a></li>
        <li><a href="/teamproject/classes/class_types/zumba.php">Zumba</a></li>
        <li><a href="/teamproject/classes/class_types/beach_body.php">Beach Body</a></li>
        <li><a href="/teamproject/classes/class_types/senior.php">Senior Keep Fit</a></li>
        <li><a href="/teamproject/classes/class_types/spirit_cycle.php">Spirit Cycle</a></li>
    </nav>
    NAV;
    return $classNav;
}
