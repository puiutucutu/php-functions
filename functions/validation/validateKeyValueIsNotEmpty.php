<?php

/**
 * @param string $key
 * @param mixed  $value
 *
 * @throws \UnexpectedValueException
 */
function validateKeyValueIsNotEmpty($key, $value)
{
    if (empty($value)) {
        throw new \UnexpectedValueException(
            "Value for key `${key}` cannot be empty"
        );
    }
}
