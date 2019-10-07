<?php
echo "<link rel='stylesheet' type='text/css' href='style.css'/>";

$username = $_POST["username"];
$password = $_POST["password"];

$apple = $_POST["apple"];
$banana = $_POST["banana"];
$orange = $_POST["orange"];

$shipping = $_POST["shipping"];

$costToShip = 0;
$total = 0;

echo "<h2>Fruit Receipt</h2>";

echo "<p> Username: " . $username . "</p>";
echo "<p> Password: " . $password . "</p>";
echo "<br><br>";

echo "<h3>Apple</h3>";
echo "Quantity: " . $apple . "<br>";
echo "Cost per item: $1.20<br>";
echo "Sub Total: $" . $apple * 1.20;

echo "<h3>Banana</h3>";
echo "Quantity: " . $banana . "<br>";
echo "Cost per item: $0.75<br>";
echo "Sub Total: $" . $banana * .75;

echo "<h3>Orange</h3>";
echo "Quantity: " . $orange . "<br>";
echo "Cost per item: $1.00<br>";
echo "Sub Total: $" . $orange * 1.00;

echo "<h3>Shipping Method</h3>";

if ($shipping == "free") {
    $costToShip = 0;
    echo "Free 7 day<br>";
} elseif ($shipping == "50") {
    $costToShip = 50;
    echo "$50.00 over night<br>";
} else {
    $costToShip = 5;
    echo "$5.00 three day<br>";
}

$total = ($apple * 1.20) + ($banana * .75) + ($orange) + $costToShip;

echo "<br><br>";
echo "<h3>Total Cost</h3>";
echo "$" . $total;
?>