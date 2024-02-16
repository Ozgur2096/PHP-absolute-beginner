<?php

// while
$counter = 0;
while ($counter < 10) {
  echo $counter . '</br>';
  // if ($counter === 5) break;
  $counter += 1;
};
echo '</br>';

// do - while
$counter2 = 0;
do {
  echo $counter2 . '</br>';
  $counter2++;
} while ($counter2 < 10);
echo '</br>';

// for
for ($i = 0; $i < 10; $i++) {
  echo $i . '</br>';
}
echo '</br>';

// foreach
$fruitArray = ['banana', 'orange', 'apple'];
foreach ($fruitArray as $i => $fruit) {
  echo $i . $fruit . '</br>';
};


// Iterate Over associative array.
$person = [
  'name' => 'Ozy',
  "surname" => 'Oz',
  'age' => 30,
  'hobbies' => ['tennis', 'reading']
];

foreach ($person as $key => $value) {
  if (is_array($value)) {
    echo $key . ' ' . implode(',', $value) . '</br>';
  } else {
    echo $key . ' ' . $value . '</br>';
  };
};
