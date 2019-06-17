<?php

require_once "validateIsNotArray.php";

/**
 * @param array $toValidate
 *
 * @throws \InvalidArgumentException
 */
function validateIsOneDimensionalArray(array $toValidate)
{
    foreach ($toValidate as $k => $v)
    {
        try {
            validateIsNotArray($v);
        } catch (\InvalidArgumentException $exception) {
            throw new \InvalidArgumentException(
                "Array must be one dimensional", 0, $exception
            );
        }
    }
}
