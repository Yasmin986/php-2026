<?php

/**Make an associative array $product with keys: name, price, stock, category.
Print just the price using its key.
Update stock to a new value.
Add a new key discount with some value.
Loop through $product with foreach and print each key and value like: name: Laptop
Check whether the key sku exists using isset() or array_key_exists() — print the result.*/

$product = [
    "name" => "Laptop",
    "price" => 150000,
    "stock" => 50,
    "category" => "electronics",
];

echo ($product["price"]);

$product["stock"] = 500;

$product["discount"] = 20;

print_r($product);

foreach ($product as $key => $value) {
    echo "$key : $value \n";
};

var_dump(isset($product["sku"]));
