<?php

require_once "validateDateAsFormat.php";

/**
 * Calculates the start & end date ranges of a specified year using the day of
 * the current year.
 *
 * @param $year
 *
 * @return object An object containing the starting and ending dates in the
 *                format of YYY-MM-DD HH:MM:SS
 * @throws \Exception*
 */
function dateRangeYearToDateYearSpecified($year)
{
    if (!validateDateAsFormat($year, 'Y')) {
        throw new \Exception('Invalid year provided');
    }

    /**
     * create year to date object to store date ranges
     */
    $ytd = (object)[];

    /**
     * calculate date of the specified year using the day of current year
     */
    $dayOfYear = (new DateTime())->format('z');
    $date = DateTime::createFromFormat('Y-z', $year.'-'.$dayOfYear);

    /**
     * calculate the start date for the year to date
     */
    $ytd->rangeStart = (new DateTime)
        ->setDate($year, 1, 1)
        ->setTime(0,0,0)
        ->format('Y-m-d H:i:s');

    /**
     * calculate the end date for the year to date
     */
    $ytd->rangeEnd = (new DateTime)
        ->setDate($year, $date->format('m'), $date->format('d'))
        ->setTime(23, 59, 59)
        ->format('Y-m-d H:i:s');

    return $ytd;
}
