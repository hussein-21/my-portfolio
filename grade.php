<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="style.css">
     <title>Grade Calculator</title>
</head>

<body>
	<h1>Grade Calculator</h1>
	<form action="grade2.php" method="post">
   <table>
		<tr>
			<td>Homework #1</td>
			<td><input type="number" name="hw1" min="0" max="77"></td>
		</tr>
		<tr>
			<td>Homework #2</td>
			<td><input type="number" name="hw2" min="0" max="77"></td>
		</tr>
		<tr>
			<td>Homework #3</td>
			<td><input type="number" name="hw3" min="0" max="85"></td>
		</tr>
		<tr>
			<td>Quiz #1</td>
			<td><input type="number" name="q1" min="0" max="20"></td>
		</tr>
		<tr>
			<td>Quiz #2</td>
			<td><input type="number" name="q2" min="0" max="20"></td>
		</tr>
		<tr>
			<td>Quiz #3</td>
			<td><input type="number" name="q3" min="0" max="20"></td>
		</tr>
		<tr>
			<td>Quiz #4</td>
			<td><input type="number" name="q4" min="0" max="20"></td>
		</tr>
		<tr>
			<td>Quiz #5</td>
			<td><input type="number" name="q5" min="0" max="20"></td>
		</tr>
		<tr>
			<td>Exam #1</td>
			<td><input type="number" name="exam" min="0" max="115"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="Calculate"></td>
		</tr>
	</table>

	</form>
</body>
</html>