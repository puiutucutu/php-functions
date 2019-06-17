<?php

/**
 * Returns the date range of the first day and the current day of the current
 * year
 *
 * @return object An object containing the starting and ending dates in the
 *                format of YYY-MM-DD HH:MM:SS
 * @throws Exception
 */
function dateRangeYearToDate()
{
    // create object to store date ranges
    $yearToDate = (object) [];

    // calculate the start and end date for the year to date
    $yearToDate->rangeStart = (new DateTime)->setDate(date('o'), 1, 1)->setTime(0, 0, 0)->format('Y-m-d H:i:s');
    $yearToDate->rangeEnd = (new DateTime)->setTime(23, 59, 59)->format('Y-m-d H:i:s');

    return $yearToDate;
}
