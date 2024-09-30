<?php
// connect to the database
include('../../../../connect.php');
try {
    // establish database connection with PDO
    $DBH = new PDO("mysql:host=$host;dbname=$database", $username, $password);
}
catch(PDOException $e) {
    // display error message if unable to connect to the database
    echo $e->getMessage();
}

// run the query and store the results in a variable
$sql= "SELECT menuitem AS ITEM, sum(quantity) AS QUANTITY 
        FROM order2
        GROUP BY menuitem
        ORDER BY QUANTITY desc limit 5";
$stmt = $DBH->query($sql);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

// output the results in an HTML table
echo '<table>';
echo '<tr><th>Item</th><th>Quantity</th></tr>';
foreach ($rows as $row) {
    echo '<tr><td>' . $row['ITEM'] . '</td><td>' . $row['QUANTITY'] . '</td></tr>';
}
echo '</table>';

// close the database connection
$DBH = null;
?>


