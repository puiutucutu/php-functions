<?php

/**
 * @param array    $items
 * @param callable $callback
 *
 * @return array
 */
function reindexUsingCallbackKey(array $items, $callback)
{
    $temp = [];
    foreach ($items as $value) {
        $id = $callback($value);
        $temp[$id] = $value;
    }

    return $temp;
}
