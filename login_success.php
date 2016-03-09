<?php
session_start();
if(!session_is_registered(myusername)){
header("location:retrivedisplay.php");
}
?>
<html>
<body>
Login Successful
</body>
</html>