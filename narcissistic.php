<?php

function narcissistic(int $number)
{
    $arrayNumber = array_map('intval', str_split($number));

    $length = count($arrayNumber);

    $sumResult = 0;

    foreach ($arrayNumber as $an) {
        $sumResult += pow($an, $length);
    }

    return $sumResult === $number ? true : false;
}

var_dump(narcissistic(153));