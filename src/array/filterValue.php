<?php

/**
 * @param string $valueToFilter
 *
 * @return \Closure A function that expects a 1d array and returns an array
 *                  filtered of values matching $valueToFilter.
 */
function filterValue($valueToFilter)
{
    return function($xs) use ($valueToFilter) {
        return array_filter($xs, function($x) use ($valueToFilter) {
            return $x !== $valueToFilter;
        });
    };
}
