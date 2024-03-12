<?php
// Magic constants
echo __DIR__ . '<br>';
echo __FILE__ . '<br>';
echo __LINE__ . '<br>';
echo __LINE__ . '<br>';
// Create directory
// mkdir('test');

// Rename directory
// rename('test', 'test2');

// Delete directory
// rmdir('test2');

// Read files and folders inside directory
echo file_get_contents('lorem.txt') . '<br>';

$files = scandir('./');
// $files = scandir('../');
echo '<pre>';
var_dump($files);
echo '</pre>';

// file_get_contents, file_put_contents
file_put_contents('sample.txt', 'Some content');

// file_get_contents from URL
$usersJSON = file_get_contents('https://jsonplaceholder.typicode.com/users');

echo $usersJSON;

file_put_contents('sample.txt', $usersJSON);

$users = json_decode($usersJSON);
echo '<pre>';
var_dump($users);
echo '</pre>';

// https://www.php.net/manual/en/book.filesystem.php
echo file_exists('sample.txt'); // true if file exists
echo is_dir('test'); // true if directory exists
// filemtime
// filesize
// disk_free_space
// file