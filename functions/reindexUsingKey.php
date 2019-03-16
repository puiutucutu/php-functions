<?php

/**
 * @param array  $items
 * @param string $keyName
 *
 * @return array
 * @throws OutOfBoundsException
 */
function reindexUsingKey(array $items, $keyName)
{
    $temp = [];
    foreach ($items as $k => $v) {
        if (!isset($v[$keyName])) {
            throw new OutOfBoundsException(
                "Key name of `${keyName}` does not exist on item at key `${k}`"
            );
        }
        $temp[$v[$keyName]] = $v;
    }

    return $temp;
}
