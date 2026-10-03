<?php

/**Build an indexed array $products of 4 associative arrays, each with name, price, stock.
Print just the name of the 3rd product using double indexing — think about what two things you need to index into: which record, then which key.
Loop through $products with foreach and print one line per product, something like Laptop - price 150000 - stock 50.
Add a 5th product to the end of $products using [] — remember, you're pushing a whole associative array this time, not a single value like you did with $colors[].
Loop again, confirm all 5 print. */

$products = [[
    "name" => "Laptop",
    "price" => 150000,
    "stock" => 50
], [
    "name" => "Wireless Mouse",
    "price" => 799,
    "stock" => 115
], [
    "name" => "Mechanical Keyboard",
    "price" => 3200,
    "stock" => 40
], [
    "name" => "Monitor 24-inch",
    "price" => 3400,
    "stock" => 0
]];

// echo ($products[2]["name"]);

foreach ($products as $item) {
    echo $item["name"] . " Price - " . $item["price"] . " Stock - " . $item["stock"] . "\n";
}

$products[] = [
    "name" => "Calculator",
    "price" => 250,
    "stock" => 20
];


foreach ($products as $material) {
    echo $material["name"] . " Price - " . $material["price"] . " Stock - " . $material["stock"] . "\n";;
}
