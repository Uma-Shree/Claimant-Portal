<?php require_once('functions/db.php');
require_once('db.php');


$Uname=$_POST['username'];
$Password=$_POST['password'];

$username=stripcslashes($Uname);
$password=stripcslashes($Password);
$username=mysqli_real_escape_string($con,$username);
$Password=mysqli_real_escape_string($con,$password);


$sql="select* from `claimant-details` where User_Name=$username";
$result=mysql_select_sdb()


?>
