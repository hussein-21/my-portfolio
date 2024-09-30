<!DOCTYPE html> <html>
<body>
<?php
$servername = "localhost";
$username = "halsaidi2";
$password = "bn5xu5c5"; 
$database = "halsaidi2";
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password); 
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "CREATE TABLE orders
					( 
					order_id       				int(10) not null auto_increment,
					payment_id					int(10) not null,
					menuitem					varchar(40),
					quantity					int,
					primary key (order_id) 
					)";
		$conn->exec($sql);
		echo "Table created successfully";
		}
	catch(PDOException $e)
		{
		echo $sql . "<br>" . $e->getMessage();
 		}
	$conn = null;
?> 
</body> 
</html>
