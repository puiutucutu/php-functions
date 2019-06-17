<?php

require_once "validateIsNotArray.php";
require_once "validateKeyValueIsNotEmpty.php";

/**
 * @param array $values
 *
 * @throws \InvalidArgumentException
 * @throws \UnexpectedValueException
 */
function validateIsOneDimensionalAndDoesNotContainEmptyValues(array $values)
{
    foreach ($values as $k => $v)
    {
        try {
            validateIsNotArray($v);
        } catch (InvalidArgumentException $exception) {
            throw new \InvalidArgumentException(
                "Array must be one dimensional", 0, $exception
            );
        }

        validateKeyValueIsNotEmpty($k, $v);
    }
}
