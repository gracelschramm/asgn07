<!DOCTYPE html>
<!--	Author: 
		Date:	
		File:	paint-estimate.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>
  
<body>
  <h1>Game Character</h1>
  <?php
  
  include("inc-game-character-object.php");
  
  // create instances
  $char1 = new GameCharacter();
  $char2 = new GameCharacter();
  
  $char1->setPlayerName("AHHH");
  $char1->setScore("10");
  $char2->setPlayerName("OOOH");
  $char2->setScore("20");
  
  $name1 = $char1->getPlayerName();
  $score1 = $char1->getScore();
  $name2 = $char2->getPlayerName();
  $score2 = $char2->getScore();
  
  print("	<table>
			<tr><td>Character 1 name:</td><td>$name1</td></tr>
			<tr><td>Score:</td><td>$score1</td></tr>
			<tr><td>Character 2 name:</td><td>$name2</td></tr>
			<tr><td>Score:</td><td>$score2</td></tr>
			</table>");
  
  if ($score1 > $score2)
    print("$name1 wins!");
  elseif($score2 > $score1)
    print("$name2 wins!");
  else
    print("Theres a tie!");
?>
</body>
  </html>