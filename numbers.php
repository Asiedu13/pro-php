<?php

foreach(['5', 5, '05', 'five'] as $myNumber) {
    echo is_numeric($myNumber);
    echo gettype($myNumber);
}


// Checking if floating point numbers are equal

$num_1 = 1.000000000001;
$num_2 = 1.000000000000;
$delta = 0.000001;

if (abs($num_1 - $num_2) < $delta) {
    echo "They are equal enough";
}else {
    echo "There's quite the difference there";
}


// Rounding off numbers
$num = 20.405;

echo round($num);
echo floor($num);
echo ceil($num);
echo round($num, 2);

printf("This is the ceil value %s", ceil($num));

$start = 3;
$end = 7;

for ($i = $start; $i < $end; $i++) {
    printf("%d is the squared of %s \n", $i * $i, $i );
}


$numbers = range(3, 7);
foreach(range(4, 9) as $n) {
     printf("%d is the squared of %s \n", $n * $n, $n );
}

// Generating random numbers
$random_number = mt_rand(3, 10);
printf("%d is the random number", $random_number);


// Number formatting
$my_num = 123458;
echo "<br />";
echo number_format($my_num);

echo number_format($my_num, 3);
echo "<br />";
echo number_format($my_num, 3, 'm');
echo number_format($my_num, 3, 'm', 'pdiddy');

// Creating number formats
$france = new NumberFormatter('fr-FR', NumberFormatter::DEFAULT_STYLE);

echo $france->format($my_num);


# formatting currency
$usaCurrency = new NumberFormatter('en-US', NumberFormatter::CURRENCY);

echo $usaCurrency->formatCurrency($my_num, 'EUR');
