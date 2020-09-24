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
<body >
	<?php include("header.php"); ?></div><br>

	<br><br><br><br><br><br>
	<table align="center" background="images\board.jpeg" width="500px" height="370px"><tr><td>
	<div>
		<div align="center"><b><font style="font-size: 30px; text-align: center;">Sign In</font></b></div>
		<br>
		<form method="post" action="logindata.php">
		<div align="center"><input type="email" name="mail" placeholder="Email Id" style="width: 400px;height: 40px;padding: 10px;"> </div><br>
		<div align="center"><input type="password" name="pass" placeholder="Password" style="width: 400px;height: 40px;padding: 10px;"> </div><br>
		<div align="center" style="color: red;"><font style="font-size: 18px; color:red;"><a href="forget.php"><b>Forget Email Id/Password</b></a></font></div><br>
		<div align="center"><b><input type="submit" name="" value="Login" name="login" style="width: 400px;height: 40px;padding: 5px; text-align: center;font-size: 20px;background-color: #dcdcdc;"></b> </div><br><br><br>
		</form>
		<div align="center"><b><font style="font-size: 20px;color:green;">Don't have a account?<br><br><a href="register.php"><font color="yellow;">Register Now </b></font></a></font></div>

	
	</div>
</td></tr>
</table>


<br><br><br><br><br><br><?php include "footer.php" ?>;
</body>
</html>