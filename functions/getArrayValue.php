<?php

/**
 * @param array  $items
 * @param string $key
 *
 * @return mixed
 * @throws \OutOfBoundsException
 */
function getArrayValue(array $items, $key) {
    if (array_key_exists($key, $items)) {
        return $items[$key];
    }

    throw new \OutOfBoundsException(
        "Array does not contain key with name: `${key}`"
    );
}
