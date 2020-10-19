<!DOCTYPE html>
<!--	Author: Grace Schramm
		Date:	10/19/2020
		File:	paint-estimate.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>

<body>
	<h1>Paint Estimate</h1>
<?php

  include("inc-rectangle-object.php");
  
  //gather input
  $length = $_POST['length'];
  $width = $_POST['width'];
  $height = $_POST['height'];
  
  // create two Rectangle instances
  $longWall = new Rectangle();
  $shortWall = new Rectangle();
  
  $longWall->setX($height); //90
  $longWall->setY($length); //180
  $shortWall->setX($height); //90
  $shortWall->sety($width); //120
  
  // calculate total area
  $totalArea = ( 2 * $longWall->getArea() ) + ( 2 * $shortWall->getArea() );
  
  print("The total area is $totalArea square feet.");
  
  
?>
</body>
</html>