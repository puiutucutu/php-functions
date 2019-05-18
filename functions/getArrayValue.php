<?php

require_once "./hasKey.php";

/**
 * @param array  $xs
 * @param string $key
 *
 * @return mixed
 * @throws \OutOfBoundsException
 */
function getArrayValue(array $xs, $key) {
    if (hasKey($key, $xs)) {
        return $xs[$key];
    }

    throw new \OutOfBoundsException(
        "Array does not contain key with name: `${key}`"
    );
}
