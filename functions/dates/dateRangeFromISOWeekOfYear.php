<?php

/**
 * Returns the starting and ending dates for an ISO-8601 week for the specified
 * year
 *
 * @param $year
 * @param $ISOWeek
 *
 * @return object An object containing the starting and ending dates in the
 *                format of YYY-MM-DD HH:MM:SS
 * @throws Exception
 */
function dateRangeFromISOWeekOfYear($year, $ISOWeek)
{
    // create date time object
    $dt = new \DateTime();

    // create object to store date ranges
    $weekDate = (object) [];

    // calculate the ISO-8601 week  start and end date for specified year
    $weekDate->began = $dt->setISODate($year, $ISOWeek, 1)->setTime(0, 0, 0)->format('Y-m-d H:i:s');
    $weekDate->ended = $dt->setISODate($year, $ISOWeek, 7)->setTime(23, 59, 59)->format('Y-m-d H:i:s');

    return $weekDate;
}
