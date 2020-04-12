<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Time Table</title>
    <style>
        body {
            background-image: url(image2.jpg);
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>

<body>

    <br><br><br>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Time Table</h1>
            <p class="lead">Enter Data</p>
            <form action="" method="post">
                <div class="form-group">
                    <label for="formGroupExampleInput">Date</label>
                    <input type="text" class="form-control" name="date" id="formGroupExampleInput" placeholder="Monday" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Class Name</label>
                    <input type="text" class="form-control" name="class" id="formGroupExampleInput2" placeholder="Yoga" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput3">Description</label>
                    <input type="text" class="form-control" name="description" id="formGroupExampleInpu3" placeholder="The perfect core strengthening solution: concentrated ab-centric floorwork paired with deep restorative stretching." required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput4">Starting Time</label>
                    <input type="text" class="form-control" name="start" id="formGroupExampleInput4" placeholder="07:00" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput5">Ending Time</label>
                    <input type="text" class="form-control" name="finish" id="formGroupExampleInput5" placeholder="08:00" required>
                </div>
                <input type="submit" name="submit" value="Submit" class="btn btn-primary" />

            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
<?php
//echo "asdasdasdaasd";
if (isset($_POST['submit'])) {
    include('../server/config/config.php');

    $date_name = $_POST["date"];
    $class_name = $_POST["class"];
    $description = $_POST["description"];
    $start = $_POST["start"];
    $finish = $_POST["finish"];
    //echo $tname." ".$sname." ".$cname." ".$st." ".$et;
    //echo "asdasdasdaasd";
    $sql = "INSERT INTO tbltimetable(date, class, description, start, finish) VALUES ('$date_name', '$class_name', '$description', '$start', '$finish')";
    if (mysqli_query($link, $sql)) {
        echo "<script type='text/javascript'>
    alert('New record created successfully');
  </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }
}
?>