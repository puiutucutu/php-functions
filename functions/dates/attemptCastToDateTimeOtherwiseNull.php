<?php

/**
 * @param string $date
 *
 * @return \DateTime|null
 */
function attemptCastToDateTimeOtherwiseNull($date)
{
    try {

        // sanity check
        if (is_string($date) === false || trim($date) === "") {
            throw new \InvalidArgumentException("Empty date value supplied");
        }

        // attempt to create a \DateTime
        return new \DateTime($date);

    } catch (\Exception $exception) {
        return null;
    }
}