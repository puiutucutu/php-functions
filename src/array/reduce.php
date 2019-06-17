<?php

/**
 * @param array    $source
 * @param callable $reducer
 * @param mixed    $initial
 *
 * @return mixed
 */
function reduce(array $source, callable $reducer, $initial)
{
    $accumulator = $initial;
    foreach ($source as $currIndex => $currValue) {
        $accumulator = $reducer($accumulator, $currValue, $currIndex, $source);
    }

    return $accumulator;
}
