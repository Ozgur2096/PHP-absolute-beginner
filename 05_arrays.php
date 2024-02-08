<?php

// Create array
$fruit = ["Banana", "Apple", "Orange"];
// $fruit = array(); // old-fashion way

// Print the whole array
echo '<pre>';
var_dump($fruit);
echo '</pre>';

// Get element by index
echo $fruit[1] . '<br>';

// Set element by index
$fruit[0] = 'Peach';

// Check if array has element at index 2
isset($fruit[2]); // true
isset($fruit[3]); // false

// Append element
$fruit[] = 'Banana';
echo '<pre>';
var_dump($fruit);
echo '</pre>';

// Print the length of the array
echo count($fruit) . '<br>';

// Add element at the end of the array
array_push($fruit, 'foo');
echo '<pre>';
var_dump($fruit);
echo '</pre>';

// Remove element from the end of the array
array_pop($fruit);
echo '<pre>';
var_dump($fruit);
echo '</pre>';

// Add element at the beginning of the array
array_unshift($fruit, 'bar');
echo '<pre>';
var_dump($fruit);
echo '</pre>';

// Remove element from the beginning of the array
array_shift($fruit);
echo '<pre>';
var_dump($fruit);
echo '</pre>';

// Split the string into an array
$string = "Banana,Apple,Peach";
$arrayFromString = explode(",", $string);
echo '<pre>';
var_dump($arrayFromString);
echo '</pre>';

// Combine array elements into string
echo implode("&", $fruit);

// Check if element exist in the array
echo '<pre>';
var_dump(in_array("Mango", $fruit));
echo '</pre>';

// Search element index in the array
echo '<pre>';
var_dump(array_search("Banana", $fruit));
var_dump(array_search("Mango", $fruit));
echo '</pre>';

// Merge two arrays
$vegetables = ["Potato", "Cucumber"];
$mergedArray = array_merge($vegetables, $fruit);
echo '<pre>';
var_dump($mergedArray);
var_dump([...$vegetables, ...$fruit]);
echo '</pre>';

// Sorting of array (Reverse order also)
sort($fruit);
echo '<pre>';
var_dump($fruit);
echo '</pre>';


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
  'name' => 'John',
  'surname' => 'Doe',
  'age' => 33,
  'hobbies' => ['tennis', 'football']
];
echo '<pre>';
var_dump($person);
echo '</pre>';

// Get element by key
echo $person['name'];

// Set element by key
$person['address'] = 'Leeuwarden';
echo $person['address'];

// Null coalescing assignment operator. Since PHP 7.4
if (!isset($person['weight'])) {
  $person['weight'] = 80;
};

$person['eyeColor'] ??= 'green';
$person['weight'] ??= 'unknown';


echo '<pre>';
var_dump($person);
echo '</pre>';


// Check if array has specific key
echo isset($person['name']);

// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys
ksort($person); // sort by keys
echo '<pre>';
var_dump($person);
echo '</pre>';

asort($person); // sort by values
echo '<pre>';
var_dump($person);
echo '</pre>';

// Two dimensional arrays
$toDos = [
  ['todo' => 'todo title 1', 'completed' => true],
  ['todo' => 'todo title 2', 'completed' => false],
];

echo '<pre>';
var_dump($toDos);
echo '</pre>';
