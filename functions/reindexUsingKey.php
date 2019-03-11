<?php

/**
 * @param array  $items
 * @param string $keyName
 *
 * @return array
 * @throws \Exception
 */
function reindexUsingKey(array $items, $keyName)
{
    $temp = [];
    foreach ($items as $k => $value) {
        if (!isset($value[$keyName])) {
            throw new Exception(
                "Key name of ${keyName} does not exist on item at key ${k}"
            );
        }
        $temp[$keyName] = $value[$keyName];
    }

    return $temp;
}
