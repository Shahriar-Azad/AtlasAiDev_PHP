<?php
// ===============================
// PHP Array Methods Demonstration
// ===============================

// 1. array() — Creating an array
$fruits = array("apple", "banana", "cherry");
echo "Original Array:\n";
print_r($fruits);

// 2. array_map() — Apply a function to all elements
$upperFruits = array_map('strtoupper', $fruits);
echo "\nAfter array_map (to uppercase):\n";
print_r($upperFruits);

// 3. array_push() — Add elements to the end
array_push($fruits, "mango", "orange");
echo "\nAfter array_push:\n";
print_r($fruits);

// 4. array_pop() — Remove the last element
$popped = array_pop($fruits);
echo "\nAfter array_pop (removed '$popped'):\n";
print_r($fruits);

// 5. array_replace() — Replace values of the first array with the second
$replaced = array_replace($fruits, array(1 => "blueberry", 2 => "grape"));
echo "\nAfter array_replace:\n";
print_r($replaced);

// 6. array_search() — Search for a value and return its key
$searchKey = array_search("apple", $replaced);
echo "\nSearching for 'apple' found at index: $searchKey\n";

// 7. array_walk() — Apply a function to each element (with key)
function showFruit($value, $key) {
    echo "Key: $key => Value: $value\n";
}
echo "\nUsing array_walk:\n";
array_walk($replaced, 'showFruit');

// 8. array_reverse() — Reverse the order of elements
$reversed = array_reverse($replaced);
echo "\nAfter array_reverse:\n";
print_r($reversed);

?>
