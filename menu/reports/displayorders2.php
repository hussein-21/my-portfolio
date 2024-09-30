<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="CIS Restaurant, Lunch Menu">
    <meta name="description" content="CIS Restaurant: Lunch Menu">
    <title>CIS Restaurant Menu</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <div id="container">
        <h2 class="blue center">Order Details</h2>

        <?php
            // include database connection file
            $payment_id = mb_substr($_GET['payment_id'], 0, 8);
            $rownum = 1;

            include('../../../../connect.php');

            try {
                // establish database connection with PDO
                $DBH = new PDO("mysql:host=$host;dbname=$database", $username, $password);
            }
            catch(PDOException $e) {
                // display error message if unable to connect to the database
                echo $e->getMessage();
            }

            // run query to retrieve payment information from 'payment' table
            $sql = "SELECT * FROM orders where payment_id=$payment_id";
            $stmt = $DBH->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();

            // display payment information in an HTML table
            echo "<table class=\"table2 tablectr\">";
            echo "<tr><th>Order number</th><th>Menu items</th><th>Quantity</th></tr>";
          
            $rownum = 1;
            foreach($result as $row) {
               echo '<tr>';
               echo "<td>$rownum</td>";
               echo "<td>". $row['menuitem'] . "</td><td>" . $row['quantity'] . "</td>";
               echo '</tr>';
               $rownum++;
            }
            echo "</table>";

            // close database connection
            $DBH = null;
        ?>

        <br>
    </div>
    <br>
</body>
</html>
