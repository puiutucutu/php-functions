<?php

/**
 * @param array $arr
 * @param int   $size
 *
 * @return array
 */
function chunk(array $arr, $size)
{
    if (!count($arr)) {
        return [];
    }

    $head = array_slice($arr, 0, $size);
    $tail = array_slice($arr, $size);

    return array_merge([$head], chunk($tail, $size));
}