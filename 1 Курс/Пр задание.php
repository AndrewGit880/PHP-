<?php

$num = [];
$str = [];
$bools = [];

$arr = [
    20,
    50,
    60,
    85,
    'agagh',
    'sgfag',
    'gragg',
    'raahe',
    true,
    true,
    false,
    false,
    [4, 7, 1],
    [5, 8, 1],
    [6, 9, 11],
];


foreach ($arr as $value) {
    if (is_int($value)) {
        $num[] = $value;
    } else if (is_string($value)) {
        $str[] = $value;

    } else if (is_bool($value)) {
        $bools[] = $value;

    } else if (is_array($value)) {
        $arr[] = $value;

    }
}

var_dump($num);






