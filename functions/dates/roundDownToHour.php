<?php

/**
 * @param \DateTime $dateTime
 *
 * @return \DateTime
 */
function roundDownToHour(\DateTime $dateTime)
{
    $clonedDateTime = $dateTime;

    return $clonedDateTime->setTime(
        $dateTime->format("H"),
        0,
        0
    );
}

