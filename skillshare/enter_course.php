<?php
if(isset($_POST["submitbtn"])){
$flag=0;
$name=$_POST["course"];
$id=$_POST["id"];
$dur=$_POST["time"];
$price=$_POST["price"];
$con=mysqli_connect("localhost","root","","tutorial");
if(!$con)
	die("Connection Unsuccessful <br>");


$s="select * from course";
$r=mysqli_query($con,$s);
while($value=mysqli_fetch_assoc($r))
{
	if($value["Id"]==$id){
		$status="Id already found.Enter another Course Id.";
		$flag=1;
	}
}
if($flag==0)
{
$sqldata="insert into course values ('".$name."','".$id."','".$dur."','".$price."')";
$check=mysqli_query($con,$sqldata);
if($check!=0)
$a="uploaded";
else
	$b="Data not inserted";
}
}
?>

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
	<body background="images\bg.jpeg"><div style="background-color: white;">
	<?php include("admin_menu.php"); ?></div><br><br>

	<table align="center" style="border-style: solid;border-color: gray;"><tr><td>
	<div >
		<form method="post" action="<?php $_PHP_SELF ?>">
		<div align="center" style="background-color: green;height: 40px;" ><font style="font-size: 25px;color: black;"><b>Enter Course Details </b></font></div><br>
		<div align="center"><input type="text" name="course" placeholder="Enter Course Name" required="" style="width: 400px;height: 40px;padding: 10px;"> </div><br>
		<div align="center"><input type="text" name="id" placeholder="Enter Course Id" required="" style="width: 400px;height: 40px;padding: 10px;"> </div><br>
		<div align="center"><input type="text" name="time" placeholder="Enter Course Duration" required="" style="width: 400px;height: 40px;padding: 10px;"> </div><br>
		<div align="center"><input type="text" name="price" placeholder="Enter Course Price" required="" style="width: 400px;height: 40px;padding: 10px;"> </div><br>
		<div align="center"><input type="submit" name="submitbtn" value="Upload" style="width: 400px;height: 40px;padding: 5px; text-align: center;font-size: 20px;background-color: orange;"> </div>	
		</form>
	</div></td></tr>
	</table>

		
<!-------------------------------------->
<table align="center"><tr><td>
<div style="color:white;width:400px;height:40px;padding: 5px; text-align: right;"><b>
			<?php
				if(isset($status))
					echo $status;
				elseif (isset($a)) 
					echo "$a";
				elseif (isset($b)) {
					echo "$b";
				}
			?></b>
		</div>
</td></tr></table>
<br><br><br><br><br><br><br><br><br><br><br><br>

<?php include "footer.php" ?>;

</body>
</html>
	
