<?php
$time = date("H");

// if($time < 12) {
//     echo 'Good morning';
// } elseif($time < 17) {
//     echo 'Good afternoon';
// }else {
//     echo 'Good Evening';
// }

// $name = 'John';

$posts = ['first post', 'second post', '3rd post'];

// using for loop
for ($i = 0; $i < count($posts); $i++) {
    echo $posts[$i] . '<br/>';
}

// usig for each
foreach ($posts as $post) {
    echo $post . ' ';
}

// range of numbers from 1 to 10
$numbers = range(1, 10);

// print_r($numbers);

// maping throught
$newNumbers = array_map(function ($number) {
    $combined = 'number '. $number;
    return $combined;
}, $numbers);

print_r($newNumbers);

// filtering
$less_than_18= array_filter($numbers, fn($number) => 
    $number <= 10
);

$sum = array_reduce($numbers, fn($carry, $number) => 
    $carry + $number
);

