<?php

/**
 * @param array    $items
 * @param callable $callback A function which will be provided the current
 *                           iterated value as an argument and is expected to
 *                           return a string representing a key value.
 *
 * @return array
 */
function reindexUsingCallbackKey(array $items, $callback)
{
    $temp = [];
    foreach ($items as $k => $value) {
        $keyName = $callback($value);
        if (!!$keyName) {
            throw new RuntimeException(
                "The returned index key from the callback function is empty"
            );
        }

        if (!isset($value[$keyName])) {
            throw new OutOfBoundsException(
                "Key name `${keyName}` does not exist on item at index `${k}`"
            );
        }

        $temp[$keyName] = $value;
    }

    return $temp;
}
