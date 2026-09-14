<?php
$a = 12;
$b = 13;
echo "$a, $b";
//echo "a", "b"; --> single line comment
/* 
multiline comment
*/

$role = "PHP developer";

echo 'Welcome $name ' . "\n"; // interpolation does not works with single quote
/*echo "Hi $name, your target role is $role" . "\n";


print("This is not used much $name " . "\n");*/

$name = "Yasmin";
$currentRole = "L2 Support engineer";
$targetRole = "PHP developer";

echo "Hi, I am $name. I have 2.8 years of experience. I have worked as backend nodejs developer in a startup in kolkata for 8 months 
Later in 2024, I joined Infosys as System Associate.I have experience as $currentRole  but i always wanted to work as a dev.
I have been preparing myself as a $targetRole outside my work and now i am into the field " . "\n";

print("I have completed BCA from Jamshedpur, Jharkhand" . "\n");
// After graduating, I wanted to build something which in my current role I am not getting the exposure, so I want to change my career from support to Dev.

echo 'Hi, I am ' . $name . ' .I have 2+ years of experience. I have worked as backend nodejs developer in a startup in kolkata for 8 months 
Later in 2024, I joined Infosys as System Associate.I have experience as ' . $currentRole . ' but i always wanted to work as a dev.
I have been preparing myself as a ' . $targetRole . ' outside my work and now i am into the field ' . "\n";
