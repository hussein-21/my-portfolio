<!DOCTYPE html>
<html>
 <head>
	<meta charset="UTF-8">
	<meta name="keywords" content="CIS Restaurant, Lunch Menu">
		<meta name="description" content="CIS Restaurant: Lunch Menu">
	<title>CIS Restaurant Menu</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<div id="container">

<div class="image-wrapper">
	<p><img class="noshow, scale-image" src="header.jpg" alt="Photo of inside of CIS 122 restaurant"></p>
</div>

<?php
//Retrieve and filter all your data from the order.php page
$firstname =mb_substr($_POST['firstname'],0,30);
$lastname =mb_substr($_POST['lastname'],0,30);
$phone1 =mb_substr($_POST['phone1'],0,3);
$phone2 =mb_substr($_POST['phone2'],0,3);
$phone3 =mb_substr($_POST['phone3'],0,4);
$email =mb_substr($_POST['email'],0,40);
$CardNumber =mb_substr($_POST['CardNumber'],0,24);
$zipcode =mb_substr($_POST['zipcode'],0,5);
$total =mb_substr($_POST['total'],0,7);
$subtotal =mb_substr($_POST['subtotal'],0,7);
$taxes =mb_substr($_POST['taxes'],0,7);
$discount =mb_substr($_POST['discount'],0,7);
$couponcode =mb_substr($_POST['couponcode'],0,5);
$CardType =mb_substr($_POST['couponcode'],0,10);

//date time
$date = date('Y-m-d H:i:s');


// connect.php
include('../../../connect.php');

// Establish database connection with PDO
try {
	$DBH = new PDO("mysql:host=$host;dbname=$database", $username, $password);
}
catch(PDOException $e){ 
	echo $e->getMessage();
}
// Use of PHP PDO prepared statements to prevent SQL injection
// Insert into payment table
$sql =$DBH->prepare("INSERT INTO payment VALUES (NULL, :firstname, :lastname, :phone1, :phone2, :phone3, :email, :CardType, :CardNumber, :zipcode, :subtotal, :taxes, :discount, :total, :couponcode, :date)");

$sql->execute( array(':firstname'=>$firstname, ':lastname'=>$lastname, ':phone1'=>$phone1, ':phone2'=>$phone2, ':phone3'=>$phone3, ':email'=>$email, ':CardType'=>$CardType, ':CardNumber'=>$CardNumber, ':zipcode'=>$zipcode, ':subtotal'=>$subtotal, ':taxes'=>$taxes, ':discount'=>$discount, ':total'=>$total, ':couponcode'=>$couponcode, ':date'=>$date ) )or die(print_r($sql->errorInfo(), true));

// Get payment_id from newly placed order
$query =$DBH->prepare("SELECT * FROM payment WHERE firstname = :firstname AND lastname = :lastname AND orderdate = :date");
$values = [':firstname' => $firstname, ':lastname' => $lastname, ':date' => $date]; $query->execute($values);
$payments = $query->fetchAll(PDO::FETCH_CLASS, 'StdClass');
foreach ($payments as $payment) { $payment_id = $payment->payment_id;
}

// Insert records into orders table
if (!empty($_POST['wings'])) {
	$wings=$_POST['wings'];
	$sql =$DBH->prepare("INSERT INTO orders VALUES (NULL, :payment_id, 'Boneless Wings and Skins Sampler', :wings)");
	$sql->execute( array(':payment_id'=>$payment_id, ':wings'=>$wings) )or die(print_r($sql->errorInfo(), true));
}

// Display message and close the database connection:
echo "<p>Order successfully placed.</p>";

// Close database connection
$DBH = null;
	
?>

</div>

</body>
</html>