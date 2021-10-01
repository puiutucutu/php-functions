<?php

/**
 * @param \DateTime $dateTime
 * @return \DateTime
 * @example
 *
 * $dt = new DateTime("2020-02-05");
 * adjustDateToEarliest($dt);
 *
 * DateTime Object
 * (
 *     [date] => 2020-02-29 23:59:59
 *     [timezone_type] => 3
 *     [timezone] => America/New_York
 * )
 *
 */
function adjustDateToLatest(\DateTime $dateTime)
{
    $dt = clone $dateTime;
    $yyyy = $dt->format("Y");
    $mm = $dt->format("m"); // i.e., `01` through `12`
    $daysInMonth = $dt->format("t"); // last day in month, i.e., `28` through `31`
    $dt->setDate($yyyy, $mm, $daysInMonth);
    $dt->setTime(23, 59, 59);

    return $dt;
}
