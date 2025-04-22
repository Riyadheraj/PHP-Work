<?php

echo  "<h2>Arthmetic Operators</h2>";
// Addition:
$a = 10;
$b = 5;
$result = $a + $b;

echo $result . "<br>";

// Subtraction:

$a = 10;
$b = 5;
$result = $a - $b;

echo $result . "<br>";

// Multiplication:

$a = 10;
$b = 5;
$result = $a * $b;

echo $result . "<br>";

// Division:

$a = 10;
$b = 5;
$result = $a / $b;

echo $result . "<br>";

// Modulus:

$a = 10;
$b = 3;
$result = $a % $b;

echo $result;


echo "<h2>Comparison Operators</h2>";

// Equal (==)
$a = 10;
$b = "10";
var_dump($a == $b);
echo "<br>";

// Identical (===)
$c = 10;
$d = "10";
var_dump($c === $d);
echo "<br>";

// Not Equal (!=)
$a = 10;
$b = 5;
var_dump($a != $b);
echo "<br>";

// Not Identical (!==)
$a = 10;
$b = 5;
var_dump($a !== $b);
echo "<br>";

// Greater Than (>)
$a = 10;
$b = 5;
var_dump($a > $b);
echo "<br>";

// Less Than (<)
$a = 10;
$b = 5;
var_dump($a < $b);
echo "<br>";

// Greater Than or Equal To (>=)
$a = 10;
$b = 5;
var_dump($a >= $b);
echo "<br>";

// Less Than or Equal To (<=)
$a = 10;
$b = 5;
var_dump($a <= $b);
echo "<br>";


echo "<h2>Logical Operators</h2>";

// AND (&&)
$a = 10;
$b = 0;
var_dump($a && $b);
echo "<br>";

// OR (||)
$a = 10;
$b = 0;
var_dump($a || $b);
echo "<br>";

// NOT (!)
$a = 10;
var_dump(!$a);
echo "<br>";


// OR (or)
$a = 0;
$b = 0;
var_dump($a or $b);
echo "<br>";

echo  "<h2>Assignment Operators</h2>";
$a = 10;
$b = 5;

echo $a . "<br>";

$a += $b;
echo $a . "<br>";

$a -= $b;
echo $a . "<br>";

$a *= $b;
echo $a . "<br>";

$a %= $b;
echo $a . "<br>";

echo "<h2>Conditional Operators</h2>";
$a = 10;
$b = 20;

$result = ($a < $b)? "This is true": "This is false";
echo $result;
?>
