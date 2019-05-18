<?php

/**
 * @param mixed $toValidate
 *
 * @throws \InvalidArgumentException
 */
function validateIsNotEmptyArray($toValidate)
{
    if (empty($toValidate)) {
        throw new \InvalidArgumentException("Value cannot be empty");
    }
}
