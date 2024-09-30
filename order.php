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

// Get post variables from HTML form
$wings = mb_substr($_POST['wings'],0,2);
$nachos = mb_substr($_POST['nachos'],0,2);
$dip = mb_substr($_POST['dip'],0,2);
$quesadilla = mb_substr($_POST['quesadilla'],0,2);
$chips = mb_substr($_POST['chips'],0,2);
$calamari = mb_substr($_POST['calamari'],0,2);
$pastrami = mb_substr($_POST['pastrami'],0,2);
$panini = mb_substr($_POST['panini'],0,2);
$pastrami = mb_substr($_POST['pastrami'],0,2);
$reuben = mb_substr($_POST['reuben'],0,2);
$vegetarian = mb_substr($_POST['vegetarian'],0,2);
$turkey = mb_substr($_POST['turkey'],0,2);
$shrimp = mb_substr($_POST['shrimp'],0,2);
$chickenpasta = mb_substr($_POST['chickenpasta'],0,2);
$angelhair = mb_substr($_POST['angelhair'],0,2);
$alfredo = mb_substr($_POST['alfredo'],0,2);
$chickenpasta = mb_substr($_POST['chickenpasta'],0,2);

$couponcode = substr(filter_input(INPUT_POST, 'couponcode', FILTER_SANITIZE_STRING),0,15);

$itemtotal=0;
$subtotal=0;
$taxes = 0;
$discount = 0;
$total = 0;

?>
<form action="order2.php" method="post" id="myform">

<h2 class="blue center">Please review and submit your order</h2>

<table class="tablectr">
<tr><th>Menu Item</th><th>Quantity</th><th>Price</th><th>Sub Totol</th></tr>
<?php

if ($wings > 0) {
	$itemtotal = $wings * 7.99;
	$subtotal = $subtotal + $itemtotal;
	echo "<tr><td>Boneless Wings and Skins Sampler</td><td class=\"center\">$wings</td><td class=\"center\">$7.99</td><td class=\"center\">$$itemtotal</td></tr>";
	echo "<input type=\"hidden\" name=\"wings\" value=\"" . $wings . "\">";
	}
if ($nachos > 0) {
	$itemtotal = $nachos * 7.99;
	$subtotal = $subtotal + $itemtotal;
	echo "<tr><td>Three Cheese Nachos</td><td class=\"center\">$nachos</td><td class=\"center\">$7.99</td><td class=\"center\">$$itemtotal</td></tr>";
	echo "<input type=\"hidden\" name=\"nachos\" value=\"" . $nachos . "\">";
	}
if ($dip > 0) {
	$itemtotal = $dip * 6.99;
	$subtotal = $subtotal + $itemtotal;
	echo "<tr><td>Spinach Artichoke Dip</td><td class=\"center\">$dip</td><td class=\"center\">$6.99</td><td class=\"center\">$$itemtotal</td></tr>";
	echo "<input type=\"hidden\" name=\"dip\" value=\"" . $dip . "\">";
	}
if ($quesadilla > 0) {
	$itemtotal = $quesadilla * 7.99;
	$subtotal = $subtotal + $itemtotal;
	echo "<tr><td>Santa Fe Chicken Quesadilla</td><td class=\"center\">$quesadilla</td><td class=\"center\">$7.99</td><td class=\"center\">$$itemtotal</td></tr>";
	echo "<input type=\"hidden\" name=\"quesadilla\" value=\"" . $quesadilla . "\">";
	}
if ($chips > 0) {
	$itemtotal = $chips * 5.99;
	$subtotal = $subtotal + $itemtotal;
	echo "<tr><td>Chips and Salsa</td><td class=\"center\">$chips</td><td class=\"center\">$5.99</td><td class=\"center\">$$itemtotal</td></tr>";
	echo "<input type=\"hidden\" name=\"chips\" value=\"" . $chips . "\">";
	}
if ($calamari > 0) {
	$itemtotal = $calamari * 7.99;
	$subtotal = $subtotal + $itemtotal;
	echo "<tr><td>Fried Calamari</td><td class=\"center\">$calamari</td><td class=\"center\">$7.99</td><td class=\"center\">$$itemtotal</td></tr>";
	echo "<input type=\"hidden\" name=\"calamari\" value=\"" . $calamari . "\">";
	}
if ($pastrami > 0) {
	$itemtotal = $pastrami * 8.99;
	$subtotal = $subtotal + $itemtotal;
	echo "<tr><td>Pastami Sandwich</td><td class=\"center\">$pastrami</td><td class=\"center\">$8.99</td><td class=\"center\">$$itemtotal</td></tr>";
	echo "<input type=\"hidden\" name=\"pastrami\" value=\"" . $pastrami . "\">";
	}
if ($panini > 0) {
	$itemtotal = $panini * 8.99;
	$subtotal = $subtotal + $itemtotal;
	echo "<tr><td>Roasted Turkey & Avocado BLT Panini</td><td class=\"center\">$panini</td><td class=\"center\">$8.99</td><td class=\"center\">$$itemtotal</td></tr>";
	echo "<input type=\"hidden\" name=\"pastrami\" value=\"" . $panini . "\">";
	}
if ($reuben > 0) {
	$itemtotal = $reuben * 8.99;
	$subtotal = $subtotal + $itemtotal;
	echo "<tr><td>Reuben Sandwich</td><td class=\"center\">$reuben</td><td class=\"center\">$8.99</td><td class=\"center\">$$itemtotal</td></tr>";
	echo "<input type=\"hidden\" name=\"reuben\" value=\"" . $reuben . "\">";
	}
if ($vegetarian > 0) {
	$itemtotal = $vegetarian * 7.99;
	$subtotal = $subtotal + $itemtotal;
	echo "<tr><td>Vegetarian Sandwich</td><td class=\"center\">$vegetarian</td><td class=\"center\">$7.99</td><td class=\"center\">$$itemtotal</td></tr>";
	echo "<input type=\"hidden\" name=\"vegetarian\" value=\"" . $vegetarian . "\">";
	}
	
echo "<tr><td></td><td colspan=\"2\">Sub-Total</td><td class=\"center\">$$subtotal</td></tr>";
echo "<input type=\"hidden\" name=\"subtotal\" value=\"" . $subtotal . "\">";
echo "<input type=\"hidden\" name=\"couponcode\" value=\"" . $couponcode . "\">";

$taxes = number_format(($subtotal * .06),2);
echo "<tr><td></td><td colspan=\"2\">Taxes</td><td class=\"center\">$$taxes</td></tr>";
echo "<input type=\"hidden\" name=\"taxes\" value=\"" . $taxes . "\">";

// Start Coupon code code ***************************
if ($couponcode == "1234" or $couponcode == "5678")
{
	$discount = $subtotal * .1;
	echo "<tr><td></td><td colspan=\"2\">10% Discount</td><td class=\"center\">$" . number_format($discount,2) . "</td></tr>";
}
elseif ($couponcode == "2345" or $couponcode == "6789")
{
	$discount = $subtotal * .2;
	echo "<tr><td></td><td colspan=\"2\">20% Discount</td><td class=\"center\">$" . number_format($discount,2) . "</td></tr>";
}
echo "<input type=\"hidden\" name=\"discount\" value=\"" . $discount . "\">";
// End Coupon code code ***************************


$total = $subtotal + $taxes - $discount;
echo "<tr><td></td><th colspan=\"2\">Total</td><td class=\"center\">$" . number_format($total,2) . "</th></tr>";
echo "<input type=\"hidden\" name=\"total\" value=\"" . $total . "\">";

echo "</table>";

// End Coupon code code ***************************

// Payment information section *****************
?>

<p class="center">Enter payment information below or <a href="javascript: history.go(-1)">go back</a> and change the order.</p>

<h2 class="blue center">Payment Information</h2>

<table class="tablectr">
<tr><td>First Name</td><td>Last Name</td></tr>
<tr>
		<td><input type="text" name="firstname" size="20" maxlength="30"></td>
		<td><input type="text" name="lastname" size="25" maxlength="30"></td>
	  </tr>
<tr><td>Phone Number</td><td>E-Mail Address</td></tr>
<tr>
		<td>
			<input type="text" name="phone1" size="3" maxlength="3">-
			<input type="text" name="phone2" size="3" maxlength="3">-
			<input type="text" name="phone3" size="4" maxlength="4">
		</td>
		<td><input type="email" name="email" size="25" maxlength="40"></td>
	  </tr>
<tr><td>Credit Card No CCV No</td><td>Zip Code</td></tr>
<tr>
  <td>

	<select id="CardType" name="CardType">
	<option value="AmEx">American Express</option>
	<option value="Discover">Discover</option>
	<option value="MasterCard">MasterCard</option>
	<option value="Visa">Visa</option>
	</select>
	<input type="text" id="CardNumber" name="CardNumber" maxlength="24" size="24" required>
</td>
<td><input type="text" name="zipcode" size="5" maxlength="5"></td>
</tr>
<tr><td colspan="4">* We only accept Mastercard, Visa, Discover, and American Express</td></tr>

<tr><td colspan="2" class="center"><input type="submit" value="Submit"></td></tr>
</table>

</form>

<br>

</div>

</body>
</html>