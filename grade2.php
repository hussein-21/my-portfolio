<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="style.css">
     <title>Grade Calculator</title>
</head>

<body>
	<h1>Grade Calculator</h1>
	<?php
		$hw1 = mb_substr($_POST['hw1'],0,2);
		$hw2 = mb_substr($_POST['hw2'],0,2);
		$hw3 = mb_substr($_POST['hw3'],0,2);
		$q1 = mb_substr($_POST['q1'],0,2);
		$q2 = mb_substr($_POST['q2'],0,2);
		$q3 = mb_substr($_POST['q3'],0,2);
		$q4 = mb_substr($_POST['q4'],0,2);
		$q5 = mb_substr($_POST['q5'],0,2);
		$exam = mb_substr($_POST['exam'],0,3);


		if ($hw1 =="" or $hw2 == "" or $hw3 == "" or $q1 =="" or $q2 =="" or $q3 == "" or $q4=="" or $q5 == "" or $exam =="")
		exit("Invalid input. You must enter at least 0 for all fields. <a href=\"javascript:history.go(-1)\">Go back</a>");


		$grade = (($hw1+$hw2+$hw3+$q1+$q2+$q3+$q4+$q5+$exam)/425)*100;


		echo "<p> Current grade is " . round($grade,0);


		if ($grade >=90)
			echo "%, Which is an A.</p>";
		elseif ($grade >= 80)
			echo "%, Which is a B.</p>";
		elseif($grade >= 70)
			echo "%, Which is a C.</p>";
		elseif($grade >= 60)
			echo "%, Which is a D.</p>";
		else
			echo "%, Which is an E.</p>";

	?>
</body>
</html>