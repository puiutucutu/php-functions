<?php

/**
 * @param mixed $toValidate
 *
 * @throws \InvalidArgumentException
 */
function validateIsNotArray($toValidate)
{
    if (is_array($toValidate)) {
        throw new \InvalidArgumentException("Cannot be an array");
    }
}
