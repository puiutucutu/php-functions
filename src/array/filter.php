<?php

/**
 * @param closure $predicate A function that will be supplied two arguments -
 *                           (i) the current iterated value and (ii) the
 *                           current iteration index.
 * @param array   $xs
 *
 * @return array
 */
function filter(closure $predicate, array $xs)
{
    return array_filter($xs, $predicate, ARRAY_FILTER_USE_BOTH);
}
