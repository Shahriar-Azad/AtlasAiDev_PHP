<?php
// ============================================
// Starting PHP from Scratch
// ============================================

// 1. VARIABLES & DATA TYPES 
$name = "Shahriar";   // String
$age = 25;            // Integer
$height = 5.9;        // Float
$isDev = true;        // Boolean
$skills = ["Python", "JavaScript", "PHP"]; // Array
$nullVar = null;      // Null

echo "<h2>1. Variables & Data Types</h2>";
echo "Name: $name<br>";
echo "Age: $age<br>";
echo "Height: $height<br>";
echo "Is Developer: " . ($isDev ? "Yes" : "No") . "<br>";
echo "Skills: " . implode(", ", $skills) . "<br>";
echo "Null variable: ";
var_dump($nullVar);
echo "<br><br>";


// 2. STRINGS 
echo "<h2>2. Strings</h2>";
$str1 = "Hello";
$str2 = "World!";
$fullStr = $str1 . " " . $str2; // Concatenation
echo "Concatenation: $fullStr<br>";
echo "Length: " . strlen($fullStr) . "<br>";
echo "Word Count: " . str_word_count($fullStr) . "<br>";
echo "Reverse: " . strrev($fullStr) . "<br>";
echo "Position of 'World': " . strpos($fullStr, "World") . "<br>";
echo "Replace: " . str_replace("World", "PHP", $fullStr) . "<br><br>";


// ----- 3. NUMBERS -----
echo "<h2>3. Numbers</h2>";
$a = 10;
$b = 3;
echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";
echo "Power: " . pow($a, $b) . "<br><br>";


// ----- 4. TYPE CASTING -----
echo "<h2>4. Type Casting</h2>";
$intVar = 42;
$floatVar = (float)$intVar;
$stringVar = (string)$intVar;
$boolVar = (bool)$intVar;
echo "Integer: $intVar<br>";
echo "To Float: $floatVar<br>";
echo "To String: $stringVar<br>";
echo "To Boolean: ";
var_dump($boolVar);
echo "<br><br>";


