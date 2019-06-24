<?php

/**
 * @param callable ...$functions Supply between 1..n functions each with an
 *                               arity of 1 (that is, accepts one and only one
 *                               argument).
 *
 * @return callable
 */
function pipe(callable ...$functions) : callable
{
    return function ($initialAccumulator) use ($functions) { // return a function with an arity of 1
        return array_reduce( // chain the supplied `$arg` value through each function in the list of functions
            $functions, // an array of functions to reduce over the supplied `$arg` value
            function ($accumulator, $currFn) { // the reducer (a reducing function)
                return $currFn($accumulator);
            },
            $initialAccumulator
        );
    };
}