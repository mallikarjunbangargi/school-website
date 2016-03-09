
<html>
<body>

<?php
$servername = "localhost";
$username = "sagar";
$password = "sagar";
$dbname = "sagar";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT sno, name, mname FROM admission";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     
     while($row = $result->fetch_assoc()) {
         echo "<br> id: ". $row["sno"]. "<br> - Name: ". $row["name"]. " <br>-mname: " . $row["mname"] . "<br>";
     }
} else {
     echo "0 results";
}

$conn->close();
?>  

