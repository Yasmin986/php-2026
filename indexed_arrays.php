<?php

/**Make an indexed array $colors with 5 color names.
Print the 3rd color using its index.
Add a 6th color to the end using [].
Remove the 1st color using unset().
print_r($colors) — look at the key gap yourself.
Then run array_values($colors) on it and print_r again — compare the two outputs. */

$colors = ['red', 'blue', 'green', 'yellow', 'indigo'];

echo $colors[2];
$colors[] = 'magenta';
unset($colors[1]);
print_r($colors);
$reindex = array_values($colors);
print_r($reindex);
