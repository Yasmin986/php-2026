<?php

/**Write a file functions_practice.php with these four functions:

1. isEven(int $n): bool — returns true/false
2. calculateDiscount(float $price, float $percent = 10): float — returns discounted price
3. An arrow function $square that returns a number squared
4. formatCurrency(float $amount): string — 
returns something like "$1,200.50" (hint: look up number_format) */

function isEven(int $n): bool
{
    return $n % 2 === 0;
}

var_dump(isEven(5)); // bool(false)
var_dump(isEven(6)); // bool(true)

function calculateDiscount(float $price, float $percent = 10): float
{
    $discount =  $price * ($percent / 100);
    $discountedPrice = $price - $discount;
    return $discountedPrice;
}

var_dump(calculateDiscount(1300, 20));


$square = fn(int $n) => $n * $n;
var_dump($square(5));
var_dump($square(7));

function formatCurrency(float $amt): string
{
    return "$" . number_format($amt, 2);
}

var_dump(formatCurrency(1200.50));
