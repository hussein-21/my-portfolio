<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="style.css">
     <title>Paper Rock Scissors</title>
</head>

<body>
	<h1>Paper Rock Scissors</h1>
	<?php
	# USERS MOVE
	$choice = mb_substr($_POST['choice'],0,1);
	#COMPUTERS MOVE
	$computer = mt_rand(0,2);
	#DISPLAY OUTPUT- BOTH MOVES
	if ($choice == 0)
		echo "<p><img src=\"images/paper1.png\" alt=\"Photo of players hand which is Paper\">&nbsp;";
	elseif ($choice == 1)
		echo "<p><img src=\"images/rock1.png\" alt=\"Photo of players hand which is Rock\">&nbsp;";
	elseif ($choice == 2)
		echo "<p><img src=\"images/scissors1.png\" alt=\"Photo of players hand which is Scissors\">&nbsp;";

	if ($computer == 0)
		echo "<img src=\"images/paper2.png\" alt=\"Photo of computers hand which is Paper\"></p>";
	elseif ($computer == 1)
		echo "<img src=\"images/rock2.png\" alt=\"Photo of computers hand which is Rock\"></p>";
	elseif ($computer == 2)
		echo "<img src=\"images/scissors2.png\" alt=\"Photo of computers hand which is Scissors\"></p>";

	#DISPLAY OUTPUT- WHO WON?
	if ($choice == $computer)
		echo "<p>It's a draw.</p>";
	elseif ($choice==0 and $computer==1)
		echo "<p>You win.</p>";
	elseif ($choice == 0 and $computer ==2)
		echo "<p>You lose.</p>";
	elseif ($choice == 1 and $computer== 0)
		echo "<p>You lose.</p>";
	elseif ($choice == 2 and $computer== 0)
		echo "<p>You win.</p>";
	elseif ($choice == 1 and $computer== 2)
		echo "<p>You win.</p>";
	elseif ($choice == 2 and $computer== 1)
		echo "<p>You lose.</p>";

	?>
</body>
</html>