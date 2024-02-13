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

// Iterate Over associative array.