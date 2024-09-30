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
        <h2 class="blue center">CIS 122 Restaurant - Menu Orders</h2>

        <?php
            // database login credentials
			include('../../../../../connect.php');

            try {
                // establish database connection with PDO
                $DBH = new PDO("mysql:host=$host;dbname=$database", $username, $password);
            }
            catch(PDOException $e) {
                // display error message if unable to connect to the database
                echo $e->getMessage();
            }

            // run query to retrieve payment information from 'payment' table
            $sql = "SELECT * FROM payment";
            $stmt = $DBH->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();

            // display payment information in an HTML table
            echo "<table class=\"table2 tablectr\">";
            echo "<tr>
                    <th>Payment No</th>
                    <th>Order Date/Time</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Phone No</th>
                    <th>Email</th>
                    <th>Sub- Total</th>
                    <th>Taxes</th>
                    <th>Discount</th>
                    <th>Total</th>
                    <th>Details</th>
                </tr>";

            foreach($result as $row) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['payment_id']) . "</td>";
                $newdate = date('m/d/y g:i A', strtotime($row['orderdate']));
                echo "<td>" . $newdate . "</td>";
                echo "<td>" . htmlspecialchars($row['lastname']) . "</td>";
                echo "<td>" . htmlspecialchars($row['firstname']) . "</td>";
                echo "<td>(" . htmlspecialchars($row['phone1']) . ") " .
                    htmlspecialchars($row['phone2']) . "-" .
                    htmlspecialchars($row['phone3']) . "</td>";
                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                echo "<td>$" . htmlspecialchars($row['subtotal']) . "</td>";
                echo "<td>$" . htmlspecialchars($row['taxes']) . "</td>";
                echo "<td>$" . htmlspecialchars($row['discount']) . "</td>";
                echo "<td>$" . htmlspecialchars($row['total']) . "</td>";
                echo "<td><a href=\"displayorders2.php?payment_id=" .
                    htmlspecialchars($row['payment_id']) . "\">Details</a></td>";
                echo "</tr>";
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
