<?php

/**
 * @param array  $arr
 * @param string $key
 *
 * @return mixed
 * @throws \OutOfBoundsException
 */
function getArrayValue(array $arr, $key) {
    if (hasKey($arr, $key)) {
        return $arr[$key];
    }

    throw new \OutOfBoundsException(
        "Array does not contain key with name `${key}`"
    );
}
