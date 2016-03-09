<?php
$servername = "localhost";
$username = "sagar";
$password = "sagar";
$dbname = "sagar";

$connection = mysqli_connect($servername, $username, $password, $dbname);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
// username and password sent from form

$name1=$_REQUEST['myusername'];
//print_r($name1);
$password11=$_REQUEST['mypassword'];
//print_r($password11);

// To protect MySQL injection (more detail about MySQL injection)
$select="SELECT `username`, `password` FROM `members` WHERE `username`='$name1' AND `password`='$password11'";
//print_r($select);
$resultselect = mysqli_query($connection,$select);
//print_r($resultselect);
$count11=mysqli_num_rows($resultselect);
//print_r($count11);
if($count11==1){
	// match found
	include_once('retrivedisplay.php');
}
else{
	echo'<h1> USER NAME AND PASSWORD is INCORRECT</h1>';
}

//die();
/*
$resultuser = mysqli_query($select);
die();
// Mysql_num_row is counting table row:SELECT * FROM `members`
$count=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword");
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";*/
?>