<?php
session_start();
if(isset($_SESSION["Email"]))
{
	echo "<font style='color:blue;font-size:20px;margin:10px;''><b>Welcome ".$_SESSION["Email"]."</b></font";
	
}
 else
 	header("location:index.php");
 ?>


	<div style="position: absolute;right: 20px;top: 1px;"><a href="logout.php"><font style="color:blue;font-size: 20px;"><b>Logout</b></font></a></div>
<link href="index.css" rel="stylesheet" type="text/css"/>
<div class="header">
  <div class="inner-header">
  <div class="logo" ><a href="index.php"><b><font style="color: yellow; ">SKILL TRAINER</font></b></a></div>

  	<div class="header-link"><a href="feeed.php">Feedback</a> </div>
  	<div class="header-link"><a href="contact_us.php">Contact Us</a> </div>
  <div class="header-link"><a href="courses_l.php">Courses</a> </div>
  <div class="header-link"><a href="aboutus.php">About Us</a> </div>
  <div class="header-link"><a href="home.php">Home</a> </div>
  

  </div>
</div>