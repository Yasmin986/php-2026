<?php

/* 1. Pick two numbers and demonstrate % and ** with real output
2.Take a variable that's a numeric string (like your $age) and 
demonstrate the difference between == and === against an actual int, 
printing both results with var_dump()
3.Write one ternary that decides something realistic — e.g. whether you're "interview ready" based on some condition you define
4. Write one line using ?? where you simulate a missing value — e.g. $expectedSalary = $data['salary'] ?? 'Not disclosed'; (you can just manually set $data as an empty array to simulate this)
5. Add a short comment stating, in your own words, why senior devs prefer === over ==
 */


$a = 5;
$b = 6;

$result = $b % $a;
$power = $a ** $b;
echo ($result . "\n");
echo ($power . "\n");

$age = "25";
var_dump($age == 25);
var_dump($age === 25);

$daysStudied = 12;
$interviewReady = ($daysStudied >= 10) ? true : false;
var_dump($interviewReady);

$data = [10, 23, 24];
$expectedSalary = $data['salary'] ?? "not disclosed";
echo ($expectedSalary);

// senior dev prefers === instead of == because === checks data type and value both
// but == checks value equality and does type juggling if required
