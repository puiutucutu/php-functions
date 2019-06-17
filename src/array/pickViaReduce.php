<?php

require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "src/array/reduce.php";

function reduceArity(callable $reducer)
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

/**
 * @param string[]|int[] $keys
 *
 * @return Closure A function that takes an associative array as the only
 * argument and returns an array of values matched for each of the supplied
 * keys.
 */
function pickViaReduce($keys)
{
    return function($obj) use ($keys)
    {
        return reduceArity
            (
                function ($acc, $currKey) use ($obj) {
                    if (isset($obj[$currKey])) {
                        $acc[$currKey] = $obj[$currKey];
                    }
                    return $acc;
                }
            )
            ([])
            ($keys)
        ;
    };
}