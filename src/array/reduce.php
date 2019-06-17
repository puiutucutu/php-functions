<?php

/**
 * @param callable $reducer
 * @param mixed    $accumulatorInitialValue
 * @param array    $source
 *
 * @return mixed
 */
function reduce(callable $reducer, $accumulatorInitialValue, array $source)
{
    $accumulator = $accumulatorInitialValue;
    foreach ($source as $currIndex => $currValue) {
        $accumulator = $reducer($accumulator, $currValue);
    }

    return $accumulator;
}