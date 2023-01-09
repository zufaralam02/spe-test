<?php

function findNeedle(array $haystack, string $needle)
{
    foreach ($haystack as $key => $value) {
        if ($value == $needle) {
            return $key;
        }
    }

    return false;
}

var_dump(findNeedle(['red', 'blue', 'yellow', 'black', 'grey'], 'blue'));
