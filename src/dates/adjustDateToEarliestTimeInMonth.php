<?php

/**
 * @param \DateTime $dateTime
 * @return \DateTime
 * @example
 *
 * $dt = new DateTime("2020-04-05");
 * adjustDateToEarliest($dt);
 *
 * DateTime Object
 * (
 *     [date] => 2020-04-01 00:00:00
 *     [timezone_type] => 3
 *     [timezone] => America/New_York
 * )
 *
 */
function adjustDateToEarliestTimeInMonth(\DateTime $dateTime)
{
    $dt = clone $dateTime;
    $yyyy = $dt->format("Y");
    $mm = $dt->format("m"); // i.e., `01` through `12`
    $dt->setDate($yyyy, $mm, "01");
    $dt->setTime(0, 0, 0);

    return $dt;
}
