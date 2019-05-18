<?php

/**
 * Ensures that the SPL DateTime object is able to interpret and operate on
 * supplied date.
 *
 * @param mixed $date
 * @param string $format An acceptable format from http://php.net/manual/en/function.date.php
 *
 * @return bool
 */
function isDateValid($date, $format = "Y-m-d")
{
    return !!DateTime::createFromFormat($format, $date);
}
