<?php
session_start();
$username=$_POST["mail"];
$password=$_POST["pass"];
$con=mysqli_connect("localhost","root","","tutorial");
if(!$con)
	die("Connection unsuccessful");

$sql="select * from register where Email='".$username."'";
$rs=mysqli_query($con,$sql);
$value=mysqli_fetch_assoc($rs);

if($username=="shivampandey11136@gmail.com" && $password=="shivam123")
{
	$_SESSION["Email"]=$username;
	header("location:home_admin.php");
}	
else if($value["Password"]==$password&&$value["Email"]==$username)
{
	$_SESSION["Email"]=$username;
	header("location:home.php");
}	
else
	header("location:error.php");

?>