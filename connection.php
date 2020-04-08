<?php
$dbServerName = "remotemysql.com:3306";
$dbUsername = "VjP6aCbRgh";
$dbPassword = "kL9UBjIFSu";
$dbName = "VjP6aCbRgh";

// create connection
$conn = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>


<?php
/*
 * get data from remote database table
 */
$sql = "SELECT * FROM tbluser";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> <br>";
        echo "user_id: " . $row["user_id"]. "<br>";
        echo "complete_name: " . $row["complete_name"]. "<br>";
        echo "contact: " . $row["contact"]. "<br>";
        echo "address: " . $row["address"]. "<br>";
        echo "username: " . $row["username"]. "<br>";
        echo "password: " . $row["password"]. "<br>";
    }
} else {
    echo "0 results";
}
?> 