<?php

require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "functions/array/hasKey.php";

/**
 * @param array  $xs
 * @param string $key
 *
 * @return mixed
 * @throws \OutOfBoundsException
 */
function getArrayValue(array $xs, $key) {
    if (hasKey($xs, $key)) {
        return $xs[$key];
    }

    throw new \OutOfBoundsException(
        "Array does not contain key with name: `${key}`"
    );
}
