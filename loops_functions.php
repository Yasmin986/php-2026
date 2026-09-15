<?php
/*3.5 — Loops
for — when you know exactly how many iterations: for ($i = 0; $i < 10; $i++) { }
    while — repeats while a condition is true, checked before each iteration
    do-while — same as while, but checks after — guarantees at least one run
    foreach — the one you'll use constantly with arrays: foreach ($items as $item) { } or
     with keys: foreach ($items as $key=> $value) { }
    break — exits the loop entirely
    continue — skips to the next iteration without finishing the current one */

$expense = [100, 240, 450, 267];

foreach ($expense as $amount) {
    echo "$amount" . "\n";
}

/*Create three variables representing three expense amounts in an array — 
something like $amounts = [500, 1200, 300]; —
and write a foreach loop that just prints each one with echo */

$amounts = [200, 400, 300];
$sum = 0;

foreach ($amounts as $amount) {
    echo "$amount" . "\n";
    $sum += (int)$amount;
}
echo $sum . "\n";

// default arguments

function calculateTotal(array $price, string $currency = "INR"): string
{
    $total = 0;
    foreach ($price as $amt) {
        $total += (int)$amt;
    }
    return "$total $currency";
}

echo calculateTotal([20, 20, 40]) . "\n";
echo calculateTotal([20, 20, 40], "USD");

// map function ///Anonymous functions
/** Using your $amounts array (or a new one), use array_map() with an anonymous function 
 * to create a new array where every amount has a 10% tax added (e.g. 500 becomes 550).
 *  Print the resulting array using print_r() (remember
 *  that one from the var_dump() explanation — readable structure, no type info needed here). */

// $money = [200, 300, 500];

// $withTax = array_map(function ($rate) {
//     $result = $rate * 1.10;
//     return $result;
// }, $money);

// print_r($withTax);

$money = [900, 300, 400];

$withTax = array_map((fn($rate) => $rate * 1.10), $money);
print_r($withTax);


// Associative array

$transaction = [
    'amount' => 6500,
    'category' => "Rent",
    'type' => "expense",
];

echo "Spent {$transaction['amount']} on {$transaction['category']} for {$transaction['type']}";
