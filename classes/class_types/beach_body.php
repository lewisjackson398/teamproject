<?php
include('../../group/global/makeHeader.php');
echo makeHeader();
include('../../server/config/config.php');
?>

<body id="page-top" class="page page_schedule">
    <?php include('../../group/global/makeNav.php');
    echo makeNav();
    ?>

    <div class="classnav">
        <?php
        include('../includes/make_nav.php');
        echo makeClassNav();
        ?>

    </div>
    <section class="schedule">
        <div class="container">
            <div class="text-left" style="color: white">
                <h2>Beach Body</h2>
                <p>Tuesday nights 6.00-7.00pm in our Malmesbury gym
                    Friday mornings 11:30am-12:30pm</p>
                <p>Yoga means union. It is the union of our mind, breath and body. Breathing slowly and holding poses for a certain
                    amount of time will slow your heart rate, and focusing your mind on the practice will develop mental peace, deep insight and fantastic benefits in flexibility.</p>
                <p>Come on Tuesday nights at 6pm or Friday mornings at 10.30am and feel the physical and
                    mental benefits that Yoga can offer you. For all levels, beginners welcome. I hope to see you soon. Azime.</p>

                <ul>
                    <li>Increased flexibility</li>
                    <li>Increased balance and stability</li>
                    <li>A full mind and body workout</li>
                    <li>Reduced stress and anxiety levels</li>
                    <li> Increased strength</li>
                    <li>Revitalised energy levels</li>
                    <li>Increased blood circulation</li>
                    <li>All classes are available to non-members and all levels are welcome.</li>
                </ul>
            </div>
        </div>
        <?php
        include('../../classes/includes/make_info.php');
        include('../../group/global/makeFooter.php');
        include('../../group/global/makeScript.php');
        echo makeInfo();
        echo makeFooter();
        echo makeScript();
        ?>
</body>