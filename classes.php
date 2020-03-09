<?php
include('makeHeader.php');
include('makeNav.php');
echo makeHeader();
echo makeNav();
?>

<link rel="stylesheet" href="resources/css/classes.css">

</div>
<!-- Timetable -->
<div class="timetable">
    <div class="tt_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container">
                    <div class="section_subtitle">Welcome to Metro Gym</div>
                    <div class="section_title">Classes Timetable</div>
                </div>
                <div class="timetable_filtering">
                    <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                        <li class="active item_filter_btn" data-filter="*">All Classes</li>
                        <li class="item_filter_btn" data-filter=".weight_loss">Weight Loss</li>
                        <li class="item_filter_btn" data-filter=".aerobics">Aerobics</li>
                        <li class="item_filter_btn" data-filter=".crossfit">Crossfit</li>
                        <li class="item_filter_btn" data-filter=".fitness">Fitness</li>
                        <li class="item_filter_btn" data-filter=".yoga">Yoga</li>
                        <li class="item_filter_btn" data-filter=".pilates">Pilates</li>
                        <li class="item_filter_btn" data-filter=".stretching">Stretching</li>
                    </ul>
                </div>

            </div>
            <div class="timetable_container d-flex flex-sm-row flex-column align-items-start justify-content-sm-between justify-content-start">

                <!-- Monday -->
                <div class="tt_day">
                    <div class="tt_title">monday</div>
                    <div class="tt_day_content grid">

                        <!-- Class -->
                        <div class="tt_class grid-item weight_loss">
                            <div class="tt_class_title">Weight Loss</div>
                            <div class="tt_class_instructor">Jessica Smith</div>
                            <div class="tt_class_time">9:00</div>
                        </div>

                        <!-- Class -->
                        <div class="tt_class grid-item aerobics">
                            <div class="tt_class_title">Aerobics</div>
                            <div class="tt_class_instructor">Jessica Smith</div>
                            <div class="tt_class_time">10:00</div>
                        </div>

                        <!-- Class -->
                        <div class="tt_class empty grid-item">

                        </div>

                        <!-- Class -->
                        <div class="tt_class grid-item aerobics">
                            <div class="tt_class_title">Aerobics</div>
                            <div class="tt_class_instructor">Jessica Smith</div>
                            <div class="tt_class_time">13:00</div>
                        </div>

                    </div>
                </div>

                <!-- Tuesday -->
                <div class="tt_day">
                    <div class="tt_title">tuesday</div>
                    <div class="tt_day_content grid">

                        <!-- Class -->
                        <div class="tt_class grid-item weight_loss">
                            <div class="tt_class_title">Weight Loss</div>
                            <div class="tt_class_instructor">Jessica Smith</div>
                            <div class="tt_class_time">8:00</div>
                        </div>

                        <!-- Class -->
                        <div class="tt_class empty grid-item">

                        </div>

                        <!-- Class -->
                        <div class="tt_class grid-item aerobics">
                            <div class="tt_class_title">Aerobics</div>
                            <div class="tt_class_instructor">Jessica Smith</div>
                            <div class="tt_class_time">12:00</div>
                        </div>

                        <!-- Class -->
                        <div class="tt_class grid-item aerobics">
                            <div class="tt_class_title">Aerobics</div>
                            <div class="tt_class_instructor">Jessica Smith</div>
                            <div class="tt_class_time">13:00</div>
                        </div>
                    </div>
                </div>

                <!-- Wednesday -->
                <div class="tt_day">
                    <div class="tt_title">wednesday</div>
                    <div class="tt_day_content grid">

                        <!-- Class -->
                        <div class="tt_class grid-item crossfit">
                            <div class="tt_class_title">Crossfit</div>
                            <div class="tt_class_instructor">Jessica Smith</div>
                            <div class="tt_class_time">9:00</div>
                        </div>

                        <!-- Class -->
                        <div class="tt_class grid-item aerobics">
                            <div class="tt_class_title">Aerobics</div>
                            <div class="tt_class_instructor">Jessica Smith</div>
                            <div class="tt_class_time">10:00</div>
                        </div>

                        <!-- Class -->
                        <div class="tt_class empty grid-item">

                        </div>

                        <!-- Class -->
                        <div class="tt_class grid-item aerobics">
                            <div class="tt_class_title">Aerobics</div>
                            <div class="tt_class_instructor">Jessica Smith</div>
                            <div class="tt_class_time">13:00</div>
                        </div>

                        <!-- Class -->
                        <div class="tt_class grid-item aerobics">
                            <div class="tt_class_title">Aerobics</div>
                            <div class="tt_class_instructor">Jessica Smith</div>
                            <div class="tt_class_time">17:00</div>
                        </div>
                    </div>
                </div>

                <!-- Thursday -->
                <div class="tt_day">
                    <div class="tt_title">thursday</div>
                    <div class="tt_day_content grid">

                        <!-- Class -->
                        <div class="tt_class grid-item fitness">
                            <div class="tt_class_title">Fitness</div>
                            <div class="tt_class_instructor">Jessica Smith</div>
                            <div class="tt_class_time">9:00</div>
                        </div>

                        <!-- Class -->
                        <div class="tt_class grid-item aerobics">
                            <div class="tt_class_title">Aerobics</div>
                            <div class="tt_class_instructor">Jessica Smith</div>
                            <div class="tt_class_time">10:00</div>
                        </div>

                        <!-- Class -->
                        <div class="tt_class grid-item yoga">
                            <div class="tt_class_title">Yoga</div>
                            <div class="tt_class_instructor">Jessica Smith</div>
                            <div class="tt_class_time">12:00</div>
                        </div>

                        <!-- Class -->
                        <div class="tt_class grid-item pilates">
                            <div class="tt_class_title">Pilates</div>
                            <div class="tt_class_instructor">Jessica Smith</div>
                            <div class="tt_class_time">13:00</div>
                        </div>
                    </div>
                </div>

                <!-- Friday -->
                <div class="tt_day">
                    <div class="tt_title">friday</div>
                    <div class="tt_day_content grid">

                        <!-- Class -->
                        <div class="tt_class grid-item yoga">
                            <div class="tt_class_title">Yoga</div>
                            <div class="tt_class_instructor">Jessica Smith</div>
                            <div class="tt_class_time">9:00</div>
                        </div>

                        <!-- Class -->
                        <div class="tt_class grid-item aerobics">
                            <div class="tt_class_title">Aerobics</div>
                            <div class="tt_class_instructor">Jessica Smith</div>
                            <div class="tt_class_time">10:00</div>
                        </div>

                        <!-- Class -->
                        <div class="tt_class empty grid-item">

                        </div>

                        <!-- Class -->
                        <div class="tt_class grid-item aerobics">
                            <div class="tt_class_title">Aerobics</div>
                            <div class="tt_class_instructor">Jessica Smith</div>
                            <div class="tt_class_time">13:00</div>
                        </div>
                    </div>
                </div>

                <!-- Saturday -->
                <div class="tt_day">
                    <div class="tt_title">Saturday</div>
                    <div class="tt_day_content grid">

                        <!-- Class -->
                        <div class="tt_class grid-item weight_loss">
                            <div class="tt_class_title">Weight Loss</div>
                            <div class="tt_class_instructor">Jessica Smith</div>
                            <div class="tt_class_time">9:00</div>
                        </div>

                        <!-- Class -->
                        <div class="tt_class grid-item pilates">
                            <div class="tt_class_title">Pilates</div>
                            <div class="tt_class_instructor">Jessica Smith</div>
                            <div class="tt_class_time">10:00</div>
                        </div>

                        <!-- Class -->
                        <div class="tt_class empty grid-item">

                        </div>

                        <!-- Class -->
                        <div class="tt_class grid-item aerobics">
                            <div class="tt_class_title">Aerobics</div>
                            <div class="tt_class_instructor">Jessica Smith</div>
                            <div class="tt_class_time">13:00</div>
                        </div>
                    </div>
                </div>

                <!-- Sunday -->
                <div class="tt_day">
                    <div class="tt_title">Sunday</div>
                    <div class="tt_day_content grid">

                        <!-- Class -->
                        <div class="tt_class grid-item stretching">
                            <div class="tt_class_title">Stretching</div>
                            <div class="tt_class_instructor">Jessica Smith</div>
                            <div class="tt_class_time">9:00</div>
                        </div>

                        <!-- Class -->
                        <div class="tt_class grid-item aerobics">
                            <div class="tt_class_title">Aerobics</div>
                            <div class="tt_class_instructor">Jessica Smith</div>
                            <div class="tt_class_time">10:00</div>
                        </div>

                        <!-- Class -->
                        <div class="tt_class empty grid-item">

                        </div>

                        <!-- Class -->
                        <div class="tt_class empty grid-item">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php
include('makeFooter.php');
echo makeFooter();
?>