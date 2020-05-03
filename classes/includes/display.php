<?php
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM tblclasses WHERE user_id = '$user_id' ORDER BY date='Sunday', date='Saturday', date='Friday', date='Thursday', date='Wednesday', date='Tuesday', date='Monday', start";
$result = mysqli_query($link, $sql);

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    echo "<div class='container'> <h1 style='color: white;'>You must login to view active classes.</h1></div>";
} else {

    if (mysqli_num_rows($result) >= 1 && ($result) <= 5) {
        echo "
    <div id='active' style'display: none;'>
    <div class='container'>
    <h2>Your active classes</h2>
    <h3 style='color: white;'>Select a row to add or delete a class.</h3>
        <table class='table'>
            <thead class='thead-dark'>
                <tr>
                    <th scope='col'>Date</th>
                    <th scope='col'>Class</th>
                    <th scope='col'>Instructor</th>
                    <th scope='col'>Starting Time</th>
                    <th scope='col'>Ending Time</th>
                </tr>
            </thead>
        <tbody>";
        while ($row = mysqli_fetch_array($result)) {
            echo "
            <tr class='actives'><td class='date'>" . $row["date"] . "</td><td class='class'>" . $row["class"] .
                "</td><td class='instructor'>" . $row["instructor_name"] .  "</td>
             <td class='start'>" . substr($row["start"], 0 , -3 ) . "</td><td class='finish'>" . substr($row["finish"], 0 , -3 ) . "</td></tr>";
        }
        echo "</tbody>
    </table>
    </div>
    </div>";
    } else if (mysqli_num_rows($result) == 0) {
        echo "<div id='test'><div class='container'><h1 style='color: white;'>No active classes.</h1></div></div>";
    }
}
