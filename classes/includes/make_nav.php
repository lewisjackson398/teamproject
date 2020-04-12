
<?php
function makeClassNav()
{
    $classNav = <<<NAV
    <nav class="text-center" style="color: white" id="class_types">Classes
        <li><a href="../classes.php">Class Timetable</a></li>
        <li><a href="../class_types/hot_yoga.php">Hot Yoga</a></li>
        <li><a href="../class_types/zumba.php">Zumba</a></li>
        <li><a href="../class_types/beach_body.php">Beach Body</a></li>
        <li><a href="../class_types/beginner.php">Beginner</a></li>
        <li><a href="../class_types/spirit_cycle.php">Spirit Cycle</a></li>
    </nav>
    NAV;
    return $classNav;
}
