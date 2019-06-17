<?php

require_once "./reduce.php";

/**
 * @param string[]|int[] $keys
 *
 * @return Closure A function that takes an associative array as the only
 * argument and returns an array of values matched for each of the supplied
 * keys.
 */
function pick($keys)
{
    return function ($obj) use ($keys)
    {
        $output = [];
        $objKeys = array_keys($obj);

        foreach ($keys as $key)
        {
            if (in_array($key, $objKeys)) {
                $output[$key] = $obj[$key];
            }
        }

        return $output;
    };
}