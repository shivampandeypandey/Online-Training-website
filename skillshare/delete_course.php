<?php
if(isset($_POST["sub"]))
{
$id=$_POST["Id"];
$con=mysqli_connect("localhost","root","","tutorial");
if(!$con)
	die("unsuccessful");
$s="select * from course";
$r=mysqli_query($con,$s);
while($value=mysqli_fetch_assoc($r))
{
	if($value["Id"]==$id){
		$sql="delete from course where Id='".$id."'";
		$check=mysqli_query($con,$sql);
		$a="Course Deleted";
	}
	else
		$b="Id not found";
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

	<body background="images\bg.jpg"><div style="background-color: white;">
	<?php include("admin_menu.php"); ?></div><br><br>


	<form method="post" action="<?php $_PHP_SELF ?>"  >
		<font  style="color: white; font-size: 20px;">
			<div align="center">Enter Course Id</font> <input type="text" name="Id">
		<input type="submit" value="Delete" name="sub"></div>

	</form>

<div align="center">
			<?php
			if(isset($a))
				echo "<font style='color:white;'> $a </font> ";
			elseif (isset($b)) 
				echo "<font style='color:white;'> $b </font> ";
			?>
				
		</div>

<br><?php include "footer.php" ?>;
<br>
</body>
</html>
	
