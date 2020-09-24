<?php
$uname=$_POST["name"];
$email=$_POST["mail"];
$pass=$_POST["pass"];
$cpass=$_POST["cpass"];

$con=mysqli_connect("localhost","root","","tutorial");
if(!$con)
	die("Connection Unsuccessful <br>");

if($pass!=$cpass)
	die("password and confirm password are different. Data not inserted");


$s="select * from register";
$r=mysqli_query($con,$s);
while($value=mysqli_fetch_assoc($r))
{
	if($value["Email"]==$email)
		die("Email already registered. Enter another Email Id.");
}

$sqldata="insert into register values ('".$uname."','".$email."','".$pass."')";
$check=mysqli_query($con,$sqldata);
if($check!=0)
	header("location:front_login.php");
else
	echo "Data not inserted";

?>