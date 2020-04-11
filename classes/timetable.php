<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Time Table</title>
    <style>
    body{
      background-image: url(image3.jpg);
      background-size: cover;
      background-attachment: fixed;
    }
    </style>
  </head>
  <body>
  
  <br><br><br>
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-4" align="center">Time Table</h1>
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Class</th>
      <th scope="col">Instructor</th>
      <th scope="col">Description</th>
      <th scope="col">Starting Time</th>
      <th scope="col">Ending Time</th>
    </tr>
  </thead>
  <tbody>
  <?php
include('../server/config/config.php');
$sql = "Select * from tbltimetable ORDER BY date='Sunday', date='Saturday', date='Friday', date='Thursday', date='Wednesday', date='Tuesday', date='Monday', start ";
$result = mysqli_query($link, $sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_array($result)) {
        echo "<tr><td>" . $row["date"]. "</td><td>" . $row["class"] . "</td><td>" . $row["instructor_name"] . "</td><td>". $row["description"] . "</td>
        <td>". $row["start"] . "</td><td>" . $row["finish"]. "</td></tr>";
    }
    echo "</table>";
}
?>
  </tbody>
</table>
      </p>
    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>