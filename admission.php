<?php
$servername = "localhost";
$username = "sagar";
$password = "sagar";
$dbname = "sagar";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$result=$_REQUEST;
$name=$_REQUEST['name'];
$mname=$_REQUEST['mname'];
$fname=$_REQUEST['fname'];
$pa=$_REQUEST['pa'];
$ph=$_REQUEST['ph'];
$dob=$_REQUEST['dob'];
$gen=$_REQUEST['gen'];
$rel=$_REQUEST['rel'];
$cat=$_REQUEST['cat'];
$doc=$_REQUEST['doc'];
$med=$_REQUEST['med'];
$class=$_REQUEST['class'];
$per=$_REQUEST['per'];

$sql = "INSERT INTO `new`( `name`, `mname`, `fname`, `pa`, `ph`, `dob`, `gen`, `rel`, `cat`, `doc`, `med`, `class`, `per`) VALUES ('$name','$mname','$fname','$pa','$ph','$dob','$gen','$rel','$cat','$doc','$med','$class','$per')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>