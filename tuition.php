<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="style.css">
     <title>HFC Tuition Calculator</title>
</head>

<body>
    <h1>Tuition Calculator</h1>
     <form action="tuition2.php" method="post">
     <p>residency<br>
      <select name="residency">
        <option value="1">In-District Student
        <option value="2">Out-Of-District Student
        <option value="3">Out of State / International Student
    </select>

    
     <p>Would you like information on financial aid?<br>
      <select name="faid">
        <option value="1">No
        <option value="2">Yes
    </select>
    
    <p>Level 100 & 200 Credit Hours<br>
    <input type="number" name="lower" min="0" max="25" value="0"></p>
    
    <p>Level 300 & 400 Credit Hours<br>
    <input type="number" name="upper" min="0" max="25" value="0"></p>
    <p><input type="submit" value="Calculate"></p>
     </form>
</body>
</html>