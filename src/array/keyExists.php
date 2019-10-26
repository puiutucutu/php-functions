<?php

/**
 * @param string $k
 *
 * @return \Closure Function that takes an array to check the existence of the
 *                  key against (only array keys of the first dimension will be
 *                  checked).
 * @example
 *
 * $xs = ["name" => "John", "surname" => "Smith"];
 * keyExists("name")($xs); //=> true;
 *
 */
function keyExists($k)
{
    return function(array $xs) use ($k)
    {
        return hasKey($k, $xs);
    };
}
