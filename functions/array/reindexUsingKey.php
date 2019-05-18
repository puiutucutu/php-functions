<?php

/**
 * @param array  $xs
 * @param string $keyName
 *
 * @return array
 * @throws \Exception
 */
function reindexUsingKey(array $xs, $keyName)
{
    $temp = [];
    foreach ($xs as $k => $x)
    {
        if (!isset($x[$keyName])) {
            throw new Exception(
                "Key name of ${keyName} does not exist on item at key ${k}"
            );
        }

        $temp[$keyName] = $x[$keyName];
    }

    return $temp;
}
