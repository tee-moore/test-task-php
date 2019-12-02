<?php

require __DIR__ . '/vendor/autoload.php';

use BazuTest\Math\Cal;

$cal = new Cal();
$cal->minus(5);
$cal->plus(25.7);
$cal->divide(2);
$cal->multiply(10);

if ($cal->result != 0) {
    $cal->plus(42);
}

$cal->round();

echo 'Result: ' . $cal->result;
