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
