<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width",initial-scale=1>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body ><div style="background-color: white;">
	<?php include("header.php"); ?></div><br><br><br><br><br>
	<table align="center" background="images\board.jpeg" width="500px" height="470px"><tr><td>
	<div >
		<form method="post" action="registerdata.php" name="form">
		<div align="center"><font style="font-size: 25px;color: black;"><b>--Register Here--</b></font></div><br>
		<div align="center"><font style="font-size: 17px;color: green;">Create your account</font></div><br>
		<div align="center"><input type="text" name="name" placeholder="Enter Name" required="" style="width: 400px;height: 40px;padding: 10px;"> </div><br>
		<div align="center"><input type="email" name="mail" placeholder="Email Id" required="" style="width: 400px;height: 40px;padding: 10px;"> </div><br>
		<div align="center"><input type="password" name="pass" placeholder="Password" required="" style="width: 400px;height: 40px;padding: 10px;"> </div><br>
		<div align="center"><input type="password" name="cpass" placeholder="Confirm Password" required="" style="width: 400px;height: 40px;padding: 10px;"> </div><br>
		<div align="center"><input type="checkbox" name="mycheck" required=""> <font style="font-size: 18px;color: green;">I accept the terms & conditions and privacy policy.</font></div><br>
		<div align="center"><input type="submit" name="" value="Register Now"  style="width: 400px;height: 40px;padding: 5px; text-align: center;font-size: 20px;background-color: orange;"> </div>	
		</form>
	</div>
	<div align="center" ><font style="font-size: 20px;color: green;">Already have an account. <a href="front_login.php"><font style="font-size: 25px; color: red;"><b>Sign In</b></font></a></font></div></td></tr>
	</table><br><br><br><br><br>

	
	<?php include "footer.php" ?>;
<br>
</body>
</html>