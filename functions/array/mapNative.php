<?php

/**
 * Implemented as a wrapper around the SPL `array_map` function.
 *
 * @param array   $arr
 * @param closure $callback A function that will be supplied with three
 *                          arguments - (i) the current iterated value, (ii)
 *                          the current iteration index, and (iii) the original
 *                          array.
 *
 * @return array
 */
function mapNative(array $arr, closure $callback)
{
    return array_map(
        function ($item) use ($arr, $callback) {
            return $callback($item, key($arr), $arr);
        }, $arr
    );
}
