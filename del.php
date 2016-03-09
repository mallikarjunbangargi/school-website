<?php
$servername = "localhost";
$username = "sagar";
$password = "sagar";
$dbname = "sagar";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "DELETE FROM admission WHERE sno=29";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>del
