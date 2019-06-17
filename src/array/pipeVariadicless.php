<?php

/**
 * Supply between 1..n functions each with an arity of 1 (that is, accepts
 * one and only one argument). Versions prior to php 5.6 do not have the
 * variadic operator `...` and as such require the use of `func_get_args()` to
 * obtain the comma-delimited list of expressions provided via the argument
 * list on function call.
 *
 * Example - Call the function `pipeVariadicless()` like:
 *
 *   pipeVariadicless ($addOne, $multiplyByTwo);
 *
 * @return closure
 */
function pipeVariadicless()
{
    $functions = func_get_args(); // an array of callable functions [$addOne, $multiplyByTwo]

    return function ($initialAccumulator) use ($functions) { // return a function with an arity of 1
        return array_reduce( // chain the supplied `$arg` value through each function in the list of functions
            $functions, // an array of functions to reduce over the supplied `$arg` value
            function ($accumulator, $currFn) { // the reducer (a reducing function)
                return $currFn($accumulator);
            },
            $initialAccumulator // the initial value of the accumulator
        );
    };
}