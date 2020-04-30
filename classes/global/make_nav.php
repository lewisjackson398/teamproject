<?php
function makeClassNav()
{
    $classNav = <<<NAV
    <nav class="classNav">
        <h3 class="text-left" style="color: white";>Classes</h3>
        <li><a href="/teamproject/classes/classes.php">Class Timetable</a></li>
        <li><a href="/teamproject/classes/class_types/yoga.php">Yoga</a></li>
        <li><a href="/teamproject/classes/class_types/zumba.php">Zumba</a></li>
        <li><a href="/teamproject/classes/class_types/kettlebells.php">Kettlebells</a></li>
        <li><a href="/teamproject/classes/class_types/seniors.php">Seniors</a></li>
        <li><a href="/teamproject/classes/class_types/cycling.php">Cycling</a></li>
        <li><a href="/teamproject/classes/class_types/dance.php">Dance</a></li>
        <li><a href="/teamproject/classes/class_types/boxing.php">Boxing</a></li>
        <li><a href="/teamproject/classes/class_types/pilates.php">Pilates</a></li>
        <li><a href="/teamproject/classes/class_types/circuits.php">Circuits</a></li>
    </nav>
    NAV;
    return $classNav;
}
?>