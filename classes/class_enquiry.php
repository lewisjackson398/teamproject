<?php
if (isset($_POST['add'])) {
    include('../server/config/config.php');

    $plan_id = $_POST["plan_id"];
    $member_id = $_POST["member_id"];
    $workout_id = $_POST["workout_id"];
    $work_out_time = $_POST["work_out_time"];
    $work_out_date = $_POST["work_out_date"];
    $instructor_id = $_POST["instructor_id"];

    $sql = "INSERT INTO tblworkoutplan(plan_id, member_id, workout_id, work_out_time, work_out_date, instructor_id) VALUES ('$plan_id', '$member_id', '$workout_id', '$work_out_time', '$work_out_date', '$instructor_id')";
    
    if (mysqli_query($link, $sql)) {
        echo "<script type='text/javascript'>
                    alert('New record created successfully');
            </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }
}



//echo("<script>console.log('PHP: " . $data . "');</script>");

?>