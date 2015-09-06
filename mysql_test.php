<?php
# Fill our vars and run on cli
# $ php -f db-connect-test.php
$dbname = 'IFB299db';
$username = 'root';
$password = 'team5';
$servername = 'localhost';
$dbtable = 'login';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id FROM $dbtable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
