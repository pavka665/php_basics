<?php

$output = '';

$user = [
    'name' => 'John Doe',
    'email' => 'john@mail.com',
    'hobies' => ['Tennis', 'Gaming']
];

// $output = $user['name'];
// $output = $user['hobies'][0];

// Adding new element
// $user['address'] = '123 Main Street';

// Removing from array
// unset($user['address']);


// MultyDimentional arrays
// $fruits = [
//     ['apple', 'red'],
//     ['orange', 'orange'],
//     ['banana', 'yellow']
// ];

// Adding new element
// $fruits[] = ['Grape', 'purple'];

$users = [
    ['name' => 'John', 'email' => 'john@mail.com'],
    ['name' => 'Mary', 'email' => 'mary@mail.com'],
    ['name' => 'Ken', 'email' => 'ken@mail.com']
]; 

array_push($users, ['name' => 'Larry', 'email' => 'larry@mail.com']);
$output = $users;

echo '<pre>';
var_dump($output);
echo '</pre>';