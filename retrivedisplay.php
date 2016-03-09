
<html>
<head>
<style>
table, th, td {
     border: 1px solid black;
}
</style>
</head>
<body bgcolor=#efefefe;>

<?php
$servername = "localhost";
$username = "sagar";
$password = "sagar";
$dbname = "sagar";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
echo'<h2>for displaying data of admmision page</h2>';
$sql = "SELECT * FROM `new`";
$result = $conn->query($sql);


echo'<table>
		
<tr>
<th> SNO</th>
<th> Name</th>
<th> Mother Name</th>
<th> father Name</th>
<th>Address</th>
<th>Phone no</th>
<th>DOB</th>
<th>Gender</th>
<th>Religion</th>
<th>Category</th>
<th>Document</th>
<th>Medium</th>
<th>class</th>
<th>Percentage</th>
</tr>';
while($output=mysqli_fetch_assoc($result)){
echo'<tr>';
foreach($output as $key => $value){
echo'<td>';
print ($value);
echo'</td>';
}
echo'</tr>';
}
echo'</table>';

echo'<h2>for displaying data of contact page</h2>';
	$sql1 = "SELECT * FROM `sendmail`";
$result1 = $conn->query($sql1);


echo'<table>
		
<tr>
<th> id</th>
<th> Name</th>
<th>Phone no</th>
<th>Email Address</th>
<th>Website</th>
<th>Message</th>
</tr>';
while($output1=mysqli_fetch_assoc($result1)){
	echo'<tr>';
		foreach($output1 as $key => $value){
			echo'<td>';
			print ($value);
			echo'</td>';
		}
	echo'</tr>';
}

echo'</table>';
?>  

</body>
</html>
