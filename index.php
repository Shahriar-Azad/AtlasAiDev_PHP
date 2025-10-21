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


// ----- 5. MATH FUNCTIONS -----
echo "<h2>5. Math Functions</h2>";
echo "Absolute: " . abs(-10) . "<br>";
echo "Round: " . round(5.67) . "<br>";
echo "Ceil: " . ceil(4.1) . "<br>";
echo "Floor: " . floor(4.9) . "<br>";
echo "Min: " . min(3, 9, 5) . "<br>";
echo "Max: " . max(3, 9, 5) . "<br>";
echo "Random: " . rand(1, 100) . "<br><br>";


// ----- 6. CONSTANTS -----
echo "<h2>6. Constants</h2>";
define("SITE_NAME", "My PHP Site");
const VERSION = "1.0.0";
echo "Constant (define): " . SITE_NAME . "<br>";
echo "Constant (const): " . VERSION . "<br><br>";


// ----- 7. MAGIC CONSTANTS -----
echo "<h2>7. Magic Constants</h2>";
echo "__FILE__: " . __FILE__ . "<br>";
echo "__DIR__: " . __DIR__ . "<br>";
echo "__LINE__: " . __LINE__ . "<br>";
echo "__FUNCTION__: (inside function below)<br><br>";

function showMagic() {
    echo "__FUNCTION__: " . __FUNCTION__ . "<br>";
}
showMagic();


// ----- 8. OPERATORS -----
echo "<h2>8. Operators</h2>";
$x = 5;
$y = 10;
echo "Addition: " . ($x + $y) . "<br>";
echo "Comparison (==): " . var_export($x == $y, true) . "<br>";
echo "Comparison (!=): " . var_export($x != $y, true) . "<br>";
echo "Logical AND (&&): " . var_export(($x < $y && $y > 5), true) . "<br>";
echo "Logical OR (||): " . var_export(($x > $y || $y > 5), true) . "<br><br>";


// ----- 9. IF-ELSE & SWITCH -----
echo "<h2>9. Conditionals</h2>";
$score = 85;
if ($score >= 90) {
    echo "Grade: A+<br>";
} elseif ($score >= 80) {
    echo "Grade: A<br>";
} else {
    echo "Grade: Below A<br>";
}

$day = "Tuesday";
switch ($day) {
    case "Monday":
        echo "Start of the week.<br>";
        break;
    case "Tuesday":
        echo "Second day!<br>";
        break;
    default:
        echo "Mid or end of week.<br>";
}
echo "<br>";


// ----- 10. LOOPS -----
echo "<h2>10. Loops</h2>";

// For loop
for ($i = 1; $i <= 5; $i++) {
    echo "For Loop Count: $i<br>";
}

// While loop
$j = 1;
while ($j <= 3) {
    echo "While Loop Count: $j<br>";
    $j++;
}

// Do-While loop
$k = 1;
do {
    echo "Do-While Loop Count: $k<br>";
    $k++;
} while ($k <= 2);

// Foreach loop
echo "Foreach Loop on Skills: ";
foreach ($skills as $skill) {
    echo "$skill ";
}
echo "<br><br>";


// ----- 11. FUNCTIONS -----
echo "<h2>11. Functions</h2>";

function greet($name = "Guest") {
    return "Hello, $name!";
}

echo greet($name) . "<br>";
echo greet() . "<br>";

function add($a, $b) {
    return $a + $b;
}

echo "Sum Function: " . add(10, 20) . "<br><br>";


// ----- 12. ARRAYS -----
echo "<h2>12. Arrays</h2>";
$fruits = ["Apple", "Banana", "Cherry"];
$person = ["name" => "Shahriar", "age" => 25, "city" => "Dhaka"];

echo "Indexed Array: ";
print_r($fruits);
echo "<br>Associative Array: ";
print_r($person);
echo "<br>";

echo "Count: " . count($fruits) . "<br>";
array_push($fruits, "Orange");
echo "After Push: ";
print_r($fruits);
echo "<br><br>";


// ----- 13. SUPERGLOBALS -----
echo "<h2>13. Superglobals</h2>";
echo "PHP_SELF: " . $_SERVER["PHP_SELF"] . "<br>";
echo "SERVER_NAME: " . $_SERVER["SERVER_NAME"] . "<br>";
echo "HTTP_HOST: " . $_SERVER["HTTP_HOST"] . "<br>";
echo "SCRIPT_NAME: " . $_SERVER["SCRIPT_NAME"] . "<br>";
echo "REQUEST_METHOD: " . $_SERVER["REQUEST_METHOD"] . "<br>";

// Example of GET
echo "<br><b>Example of GET Superglobal:</b><br>";
echo "Use URL like: ?user=Shahriar<br>";
if (isset($_GET["user"])) {
    echo "Hello, " . htmlspecialchars($_GET["user"]) . "!";
} else {
    echo "No user provided.";
}

?>
