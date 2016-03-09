<?php
$servername = "localhost";
$username = "sagar";
$password = "sagar";
$dbname = "sagar";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE admission SET name='mallikarjun' WHERE sno=7";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

