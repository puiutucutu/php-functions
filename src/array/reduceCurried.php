<?php

/**
 * @param callable $reducer
 *
 * @return Closure
 */
function reduceCurried(callable $reducer)
{
    return function ($accumulatorInitialValue) use ($reducer)
    {
        return function($source) use ($reducer, $accumulatorInitialValue)
        {
            $accumulator = $accumulatorInitialValue;
            foreach ($source as $currIndex => $currValue) {
                $accumulator = $reducer($accumulator, $currValue);
            }
            return $accumulator;
        };
    };
}