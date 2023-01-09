<?php

function blueOcean(array $list, array $delete)
{
    foreach (array_keys($list, $delete[0]) as $key) {
        unset($list[$key]);
    }

    return $list;
}

var_dump(blueOcean([1, 5, 5, 5, 5, 3], [5]));
