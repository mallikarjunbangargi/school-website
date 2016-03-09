<html>
<head>
<style>
table, th, td {
     border: 1px solid black;
}
</style>
</head>
<body>








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
//print_r($result);
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

$sql = "SELECT `sno`, `name`, `mname`, `fname`, `pa`, `ph`, `dob`, `gen`, `rel`, `cat`, `doc`, `med`, `class`, `per` FROM `admission` WHERE 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>sno</th><th>Name</th><th>MName</th><th>FName</th><th>PA</th><th>Phone</th><th>DOB</th><th>Gender</th><th>Religion</th><th>Cat</th><th>Doc</th><th>Medium</th><th>class</th><th>%</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["sno"]. "</td><td>" . $row["name"]. " </td><td>" . $row["mname"]. "</td><td>" . $row["fname"]. "</td><td>" . $row["pa"]. "</td><td>" . $row["ph"]. "</td><td>" . $row["dob"]. "</td><td>" . $row["gen"]. "</td><td>" . $row["rel"]. "</td><td>" . $row["cat"]. "</td><td>" . $row["doc"]. "</td><td>" . $row["med"]. "</td><td>" . $row["class"]. "</td><td>" . $row["per"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();


mysqli_close($conn);
?>