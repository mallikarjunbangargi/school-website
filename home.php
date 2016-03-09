<?php
$servername = "localhost";
$username = "sagar";
$password = "sagar";
$dbname = "sagar";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$result=$_REQUEST;
//print_r($result);
$name=$_REQUEST['name'];

$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$web=$_REQUEST['web'];
$message=$_REQUEST['message'];

//$sql = "INSERT INTO  `members`( `name`, `phone`, `mail`, `webadress`, `message`) VALUES ('$name','$phone','$email','$web','$message')";
$sql="INSERT INTO `members`( `username`, `password`) VALUES ('$username','$password')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>