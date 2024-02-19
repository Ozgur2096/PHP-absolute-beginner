<?php

// Print current date
echo date('d-m-Y h:i:s');
echo '<br>';

// Print yesterday
echo date('d-m-Y h:i:s', time() - 60 * 60 * 24);
echo '<br>';

// Different format: https://www.php.net/manual/en/function.date.php
echo date('F j Y h:i:s');
echo '<br>';

// Print current timestamp
echo time();
echo '<br>';

// Parse date: https://www.php.net/manual/en/function.date-parse.php
$parsedDate = date_parse('2024-2-15 09:00:00');
// echo '<pre>';
// var_dump($parsedDate);
// echo '</pre>';

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
$dateString = 'February 4 63 13:00:00';

$parsedDate2 = date_parse_from_format('F j y h:i:s', $dateString);
echo '<pre>';
var_dump($parsedDate2);
echo '</pre>';
