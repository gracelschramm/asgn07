<!DOCTYPE html>
<!--	Author: Grace Schramm
		Date:	10/19/2020
		File:	triangle-area.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>

<body>
	<h1>Triangle Area</h1>
<?php

  include("inc-triangle-object.php");
  
  //gather input
  $length = $_POST['length'];
  $height = $_POST['height'];
  
  // create two Rectangle instances
  $userTriangle = new Triangle();
  
  $userTriangle->setX($height); 
  $userTriangle->setY($length); 
  
  
  print("The total area is ".$userTriangle->getArea(). "square feet.");
  
  
?>
</body>
</html>