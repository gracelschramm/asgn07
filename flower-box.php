<!DOCTYPE html>
<!--	Author: Grace Schramm
		Date:	10/19/2020
		File:	flower-box.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>

<body>
	<h1>Triangular flower box</h1>
<?php

  include("inc-triangle-object.php");
  
  //gather input
  $length = $_POST['length'];
  $width = $_POST['width'];
  
  // create two Rectangle instances
  $flowerBox = new Triangle();
  
  $flowerBox->setX($width); 
  $flowerBox->setY($length); 
  
  
  print("The flower box is ".$flowerBox->getArea(). " square feet.");
  
  
?>
</body>
</html>