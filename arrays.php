<?php

use function PHPSTORM_META\map;

$my_cars = ['ferrari', 'lamborghini', 'lexus', 'bmw'];

$my_cars[] = 'rimac';

print_r($my_cars);

array_push($my_cars, 'using array push');

print_r($my_cars);

// Associative arrays
$something = [
    'toyota' => 'GT5',
    'rimac' => 'reverra',
    'lamborghini' => 'urus',
    'mclaren' => 'p1',
    'aston' => 'db5'
];

foreach($something as $car => $model) {
    printf("Brand: %s model: %s", $car, $model);
}

// Using the each
reset($something);
// while (list($key, $value) = each($something)) {
//     printf("$key, $value");
// }

for(reset($something); $key = key($something); next($something)) {
    print $something[$key];
}

for (reset($something); $key = key($something); next($something)) {
    print($key);
}

for ($item = 0;  $item < count($my_cars); $item++) {
    print($my_cars[$item]);
}

for ($item = count($my_cars) - 1; $item >= 0; $item--) {
    print($my_cars[$item]);
}