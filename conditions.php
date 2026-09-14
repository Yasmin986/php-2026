<?php

/* 1. Write an if/elseif/else that evaluates your own "readiness level" based on some number
 you define (e.g. days studied, problems solved) — at least 3 branches
2. Write a switch statement over a variable with at least 3 cases plus a default,
 and deliberately include a case where you omit break on purpose — run it, observe the fall-through,
  then fix it and note the difference in output
3.Rewrite that same logic using match instead, and compare — which one feels cleaner to you?
4.Add a comment explaining, in your own words, 
the one core difference between switch and match that actually matters*/

$daysStudied = 21;

if ($daysStudied <= 3) {
    echo "Not ready!";
} elseif ($daysStudied <= 10) {
    echo "Problem solving done!";
} elseif ($daysStudied <= 20) {
    echo ("Projects Done!");
} else {
    echo ("Apply for Interviews!");
}

$dayofWeek = "xyx";
switch ($dayofWeek) {
    case "Mon":
    case "Tue":
    case "Wed":
    case "Thu":
    case "Fri":
        echo "Weekdays!";
        break;
    case "Sat":
    case "Sun":
        echo "Weekends!";
        break;
    default:
        echo "Invalid Day!";
}

$weekday = 'xyz';
$day = match ($weekday) {
    'Mon', 'Tue', 'Wed', 'Thu', 'Fri' => "weekdays",
    'Sat', 'Sun' => "Weekend",
    default => "Invalid day!",
};

echo "$day" . "\n";

/* The core one: switch uses loose comparison (==), match uses strict comparison (===).

Concretely: switch ($value) { case "1": ... } would match if $value is the integer 1, 
the string "1", or even true — because == type-juggles them all into "equal." match ($value) { 1 => ... } would only
 match if $value is exactly the integer 1 — a string "1" would fall through to default (or throw an UnhandledMatchError
  if there's no default).
*/
