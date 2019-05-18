<?php

/**
 * @param array   $xs
 * @param closure $f        A function that will be supplied with three
 *                          arguments - (i) the current iterated value, (ii)
 *                          the current iteration index, (iii) the original
 *                          array.
 *
 * @return array
 */
function map(array $xs, closure $f)
{
    $mapped = [];
    for ($i = 0; $i < count($xs); $i++) {
        $mapped[] = $f($xs[$i], $i, $xs);
    }

    return $mapped;
}
