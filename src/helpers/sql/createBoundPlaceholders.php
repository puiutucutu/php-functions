<?php

/**
 * Create a string for parameter placeholders filled up to the # of params,
 * note that there needs to be one less comma than the count of ids.
 *
 * @param array $data
 *
 * @return string Given an array of three items, returns `(?),(?),(?)`
 */
function createBoundPlaceholders(array $xs)
{
    return str_repeat("(?),", count($xs) - 1) . "(?)";
}
