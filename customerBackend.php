<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


$username = $_POST["Username"];
$password = $_POST["Password"];
$left = $_POST["Left"];
$right = $_POST["Right"];
$pkg = $_POST["pkg"];
$shipping = $_POST["shipping"];

$s1="Free 7 day";
$s2="$50.00 over night";
$s3="$5.00 three day";

if($shipping == $s1)
{
	$s_cost = 0;
}
else if($shipping == $s2)
{
	$s_cost = 50;
}
else if($shipping == $s3)
{
	$s_cost = 5;
}

$total = ($left*30) + ($right*5) +($pkg*32)+ $s_cost;
echo "
<html>
<head>
<title>Receipt</title>
<link rel='stylesheet' type='text/css' href='myStyle.css'>
</head>
<body>";

echo "<h2><br>Welcome ".$username.", to Left Shoe, Right Sock!<br>";
echo "Just incase you forgot, your password is ".$password.".</h2><br>";
echo "<br><h3>View your reciept below.</h3><br>";
echo "<br><p>".$left."   Left Shoe(s) + 	$".($left*30).".00<br>";
echo $right."   Right Sock(s) + $".($right*5).".00<br>";
echo $pkg."   Left Shoe, Right Sock pkg(s) + 	$".($pkg*32).".00<br>";
echo "<br>".$shipping." shipping + 	$".$s_cost.".00<br>";
echo "<br> Total cost = 	$".$total.".00</p>";
echo "
</body>
</html>";
?>