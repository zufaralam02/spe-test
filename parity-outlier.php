<?php

function parityOutlier(array $arrayNumber)
{
    $odds = [];
    $evens = [];

    foreach ($arrayNumber as $an) {
        if ($an % 2) {
            array_push($odds, $an);
        } else {
            array_push($evens, $an);
        }
    }

    if (count($evens) === 1) {
        return $evens[0];
    } else if (count($odds) === 1) {
        return $odds[0];
    }

    return false;
}

var_dump(parityOutlier([160, 3, 1719, 19, 11, 13, -21]));
