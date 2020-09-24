<!DOCTYPE html>
<html>
<head>
	<link href="index.css" rel="stylesheet" type="text/css"/>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width",initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body background="images\bg.jpg">
	<div style="background-color: white;">
	<?php include("home_menu.php"); ?></div><br>
	<div class="container-fluid" style="text-align: center;background-color: white;"><font style=" color: green;font-size: 25px;margin: 5px;"><b>Courses are</b> </font></div><br>
<!-------------------------------------------------------------------------------------->
	<br><br><br>
	
	<div class="container" style="width:70%;height:300px; position: absolute;left: 187px;top: 200px;"><font style="font-size: 25px;color:black;font-family: monospace;">
		
		<?php
$con=mysqli_connect("localhost","root","","tutorial");
if(!$con)
	die("Connection Unsuccessful <br>");
$s="select * from course";
$r=mysqli_query($con,$s);
echo "<table border=2 background='images\board.jpeg' align='center' width='70%' style=' text-align:center;' >
<tr  ><th style='text-align:center'>Course Name</th><th style='text-align:center'>Course Id</th><th style='text-align:center'>Duration</th><th style='text-align:center'>Course Price</th></tr>";
while($value=mysqli_fetch_assoc($r))
{
	echo "<tr><td>".$value["Name"]."</td><td>".$value["Id"]."</td><td>".$value["Duration"]."</td><td>".$value["Price"];

}
echo "</table>";

?>

	</font></a></div><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
 <div class="container">
   <div class="items">
	<a href="ds.php">	 <img src="images/datascience.png" alt="" class="thumbnail"></a>

	 <div class="caption"> 
	  <p>Be A Data Scientist</p> 
	 </div> 
	 </a> 
	 </div>  

     <div class="items"> 
     	<a href="ml.php"> <img src="images/ml.png" alt="" class="thumbnail"></a>
	
	
	 <div class="caption"> 
	  <p>Be A ML Developer</p> 
	 </div> 
	 </a> 
	 </div>

	 <div class="items"> 
	 	<a href="py.php"><img src="images/python.jpg" alt="" class="thumbnail"></a>
	
	 
	 <div class="caption"> 
	  <p>Be A Python Developer</p> 
	 </div> 
	 </a> 
	 </div>  
	 
     <div class="items"> 
	 <a href="fs.php"> <img src="images/fs.jpg" alt="" class="thumbnail"></a>
	
	 <div class="caption"> 
	  <p>Be A Full Stack Developer</p> 
	 </div> 
	 </a> 
	 </div> 


     <div class="items"> 
	<a href="java.php"><img src="images/java.png" alt="" class="thumbnail"></a>
	 
	 <div class="caption"> 
	  <p>Be A Java Developer</p> 
	 </div> 
	 </a> 
	 </div> 

     <div class="items"> <a href="cs.php">
	 <img src="images/cs.jpg" alt="" class="thumbnail"></a>
	
	 <div class="caption"> 
	  <p>Be A Cyber Security Engineer</p> 
	 </div> 
	 </a> 
	 </div>

 	 
	 </div>
	 </div>

	



<?php
include("footer.php");
?>
</body>

</html>