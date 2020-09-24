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

<body background="images\bg.jpg" style="background-attachment: fixed;"><a name="ss"><div style="background-color: white;">
<div style="position:absolute;top:30px;"></div>



	<div style="position: absolute;right: 20px;top: 1px;"><a href="logout.php"><font style="color:blue;font-size: 20px;"><b>Logout</b></font></a></div>
	
	<?php
	include("admin_menu.php");
	?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form method="post"></form>
				<input type="search" placeholder="Search Courses Here....." style="width: 80%;">
				<button type="submit" class="btn-default glyphicon glyphicon-search " style="width: 30px;height: 28px;" ></button>
			</form>
		</div>
	</div>
</div>
<br><br>---->
<!-------------------------------------------------------------------------------------->
	<div class="container"><p class="text-primary lead " style="font-size:60px;margin:35px;text-align: center; color:orange;" ><b>The more you sweat in training, the less you bleed in combat.</b></p></div>
	<div class="container">
	<img src="images\back.jpg" width="100%" style="height: 400px;"></div>
	
<br><br><br>
<!-------------------------------------------------------------------------------------->
	<div class="container" align="center"><p class="text-primary lead " style="font-size:40px;margin: 10px;text-align: center; text-decoration: underline; color: red;"  ><b>:  Diagnostic : <br></b></p> </div><br>
	<div class="container">
		<div class="row">
			<div class="col-md-4 "><p class="text-success lead " style="font-size:30px;margin: 10px;text-align: center;text-decoration: underline;"  ><b>New/Top Courses <ul type="disc" style="font-size: 20px; color: black;"><li>Trending Courses </li><li>Latest Arrivals</li></ul> <br></b></p></div>
			<div class="col-md-3 col-md-offset-1"><p class="text-success lead " style="font-size:30px;margin: 10px;text-align: center;text-decoration: underline;"  ><b>Live Classes<ul type="disc" style="font-size: 20px; color: black;"><li>Expert's Lecture </li><li>Free Demo</li></ul></b></p></div>
			<div class="col-md-3 col-md-offset-1"><p class="text-success lead " style="font-size:30px;margin: 10px;text-align: center;text-decoration: underline;"  ><b>Study Material<ul type="disc" style="font-size: 20px; color: black;"><li>E-Books </li><li>Question Banks</li></ul></b></p></div>
		</div>
	</div>
<br><br>
<!-------------------------------------------------------------------------------------->

<!-------------------------------------------------------------------------------------->
<?php
include ("footer.php");
?>
</body>
</html>