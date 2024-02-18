<?php

// Function which prints "Hello I am Ozy"
function hello()
{
  echo "Hello I am Ozy";
};
hello();
echo '<br>';

// Function with argument
function hello2($text)
{
  echo $text;
};

hello2("This is a test");
echo '<br>';

// Create sum of two functions
function sum($a, $b)
{
  echo $a + $b;
};

sum(4, 5);
echo '<br>';

// Create function to sum all numbers using ...$nums
function sumAll(...$nums)
{
  $total = 0;
  foreach ($nums as $number) {
    $total += $number;
  }
  echo $total;
};

sumAll(1, 2, 3, 4, 5, 6);
echo '<br>';

// Arrow functions

function sum2(...$nums)
{
  return array_reduce($nums, fn ($carry, $n) => $carry + $n);
};

echo sum2(1, 2, 3, 4, 5, 6);
