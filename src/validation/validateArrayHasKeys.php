<?php

/**
 * @param array $target
 * @param array $keys
 *
 * @throws \InvalidArgumentException
 */
function validateArrayHasKeys(array $target, array $keys)
{
    $targetKeys = array_keys($target);
    $diffKeys = array_diff($targetKeys, $keys);

    if (count($diffKeys) > 0) {
        $diffKeysSerialized = serialize($diffKeys);
        throw new \InvalidArgumentException(
            "Mismatch between array keys and supplied list of keys: ${diffKeysSerialized}"
        );
    }
}
