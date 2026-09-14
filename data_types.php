
<?php

//declare variable string, int, float, bool, null
$age = "25"; // string
$yearsExp = 2.8; // float
$readyForTest = true; // boolean
$grossSal = 20000; // int
$previousOrg = NULL;

echo (gettype($age) . "\n");
echo (gettype($readyForTest) . "\n");
echo (gettype($yearsExp) . "\n");
echo (gettype($grossSal) . "\n");
echo (gettype($previousOrg) . "\n");


$ageAfter2Years = $age + 2;
echo $ageAfter2Years . "\n";
echo (gettype($ageAfter2Years) . "\n");

$expin2years = (int) $age;
echo ($expin2years);
echo (gettype($expin2years) . "\n");

// NULL does not contain any value - neither a space, emptty string or undefined value