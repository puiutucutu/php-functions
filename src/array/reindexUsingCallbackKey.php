<?php

/**
 * @param array    $xs
 * @param callable $callback A function which will be provided the current
 *                           iterated value as an argument and is expected to
 *                           return a string representing a key value.
 *
 * @return array
 */
function reindexUsingCallbackKey(array $xs, $callback)
{
    $temp = [];
    foreach ($xs as $k => $x)
    {
        $keyName = $callback($x);

        if (!!$keyName) {
            throw new RuntimeException(
                "The returned index key from the callback function is empty"
            );
        }

        if (!isset($x[$keyName])) {
            throw new OutOfBoundsException(
                "Key name `${keyName}` does not exist on item at index `${k}`"
            );
        }

        $temp[$keyName] = $x;
    }

    return $temp;
}
