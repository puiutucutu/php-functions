<?php

/**
 * @param array   $arr
 * @param closure $predicateFilterer A function that will be supplied two
 *                                   arguments - (i) the current iterated
 *                                   value and (ii) the current iteration index.
 *
 * @return array
 */
function filter(array $arr, closure $predicateFilterer)
{
    return array_filter(
        $arr,
        $predicateFilterer,
        ARRAY_FILTER_USE_BOTH
    );
}