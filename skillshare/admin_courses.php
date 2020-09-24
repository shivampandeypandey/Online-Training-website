<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width",initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
	<body background="images\bg.jpeg"><div style="background-color: white;">
	<?php include("admin_menu.php"); ?></div><br><br>

<table align="center" width="60%">
<tr><td>
	<div align="center" style="background-color: yellow;border-style:solid;"><font style="color:orange;font-size: 25px;"><a href="enter_course.php"><b>Enter a course</b></a></font></div>
</td>
<td>
	<div align="center" style="background-color: yellow;border-style: solid;"><font style="color:orange;font-size: 25px;"><a href="delete_course.php">Delete a course</a></font></div>
</td>
<td>
	<div align="center" style="background-color: yellow;border-style: solid;"><font style="color:orange;font-size: 25px;"><a href="">Update a course</a></font></div>
</td></tr>
</table>
<br>
<div class="container" style="width:70%;height:300px; position: absolute;left: 187px;top: 200px;"><font style="font-size: 25px;color:black;font-family: monospace;">
		
		<?php
$con=mysqli_connect("localhost","root","","tutorial");
if(!$con)
	die("Connection Unsuccessful <br>");
$s="select * from course";
$r=mysqli_query($con,$s);
echo "<table border=2 background='images\board.jpg' align='center' width='70%' style=' text-align:center;' >
<tr  ><th style='text-align:center'>Course Name</th><th style='text-align:center'>Course Id</th><th style='text-align:center'>Duration</th><th style='text-align:center'>Course Price</th></tr>";
while($value=mysqli_fetch_assoc($r))
{
	echo "<tr><td>".$value["Name"]."</td><td>".$value["Id"]."</td><td>".$value["Duration"]."</td><td>".$value["Price"];

}
echo "</table>";

?>

	</font></a></div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
include("footer.php");
?>



</body>

</html>
