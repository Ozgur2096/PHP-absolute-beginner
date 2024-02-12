<?php

$age = 20;
$salary = 300000;
$address = 0;

// // Sample if
// if ($age === 20) {
//   echo 1;
// };

// // Without circle braces
// if ($age === 20) echo 1;

// // Sample if-else
// if ($age > 20) {
//   echo 1;
// } else {
//   echo 2;
// };

// Difference between == and ===
//true
if ($age == 20) {
  echo "1" . "</br>";
};
//true
if ($age == "20") {
  echo "2" . "</br>";
};
//true
if ($age === 20) {
  echo "3" . "</br>";
};
//false
if ($age === "20") {
  echo "4" . "</br>";
};

// Ternary if
echo $age < 22 ? 'Young' : 'Old';

// Short ternary
$myAge = $age ?: 18;
$myAddress = $address ?: 'Home';
echo "<pre>";
var_dump($myAge);
var_dump($myAddress);
echo "</pre>";

// Null coalescing operator
$myName = isset($name) ? $name :  'Joe';
$myName = $name ?? 'Joe'; // same

// switch
$userRole = 'admin'; // admin, editor, user
switch ($userRole) {
  case 'admin':
    echo "admin";
    break;
  case 'editor':
    echo "editor";
    break;
  case 'user':
    echo "user";
    break;
  default:
    echo "invalid role";
}
