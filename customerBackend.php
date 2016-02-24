<?php

$path = $_POST["PFRB"];
$shadow= $_POST["SRRB"];
$rogue = $_POST["RTRB"];
$dead = $_POST["DLRB"];
$ship = $_POST["ship"];
$username = $_POST["username"];
$password = $_POST["password"];

$cost=0;
$shiptype=0;
if($ship==0){
	$shiptype="Free 7 Day";
}
if($ship==5){
	$shiptype="Three Day";
}
if($ship==50){
	$shiptype="Overnight";
}

$cost+=$path*30;
$cost+=$shadow*75;
$cost+=$rogue*45;
$cost+=$dead*35;
$cost+=$ship;

echo "Welcome, " . $username . "!<br>";
echo "Don't forget your password: " . $password . "<br>";

echo "		<br><br>
		<table>
			<tr>
				<td></td>
				<th>Quantity</th> 
				<th>Cost Per Item</th>
				<th>Sub Total</th>
			</tr>			<tr>
				<th>Pathfinder Rulebook</th>
				<td>".$path."</td> 
				<td>$30.00</td>
				<td>$".($path*30)."</td>
			</tr>			<tr>
				<th>Shadowrun Rulebook</th>
				<td>$shadow</td> 
				<td>$75.00</td>
				<td>$".($shadow*75)."</td>
			</tr>			<tr>
				<th>Rogue Trader Rulebook</th>
				<td>$rogue</td> 
				<td>$45.00</td>
				<td>$".($rogue*45)."</td>
			</tr>			<tr>
				<th>Deadlands Rulebook</th>
				<td>$dead</td> 
				<td>$35.00</td>
				<td>$".($dead*35)."</td>
			</tr>			<tr>
				<th>Shipping</th>
				<td colspan='2'>$shiptype</td> 
				<td>$".$ship."</td>
			</tr>
			<tr>
				<th colspan='3'>Total Cost</th>
				<td>$".$cost.".00</td>
			</tr>
		</table>
	";


?>
<html>
	<head>
		<title>Receipt</title>
		<link rel="stylesheet" type="text/css" href="store.css">
	</head>
	<body>
		<br><br>
		<a href="http://people.eecs.ku.edu/~mneises/448/customerFrontend">Back</a>
	</body>
</html>

