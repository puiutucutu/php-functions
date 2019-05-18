<?php

/**
 * Calculates the start & end dates for the specified month for the given year.
 *
 * @param $year
 * @param $month
 *
 * @return object
 * @throws Exception
 */
function dateRangeOfMonthOfYear($year, $month)
{
    // create date time object
    $DateTime = new DateTime();
    $DateTime->setDate($year, $month, 1);

    // create object to store date ranges
    $dateRange = (object)[];

    // compute date ranges
    $dateRange->began = $DateTime->modify('first day of this month')
        ->setTime(0,0,0)
        ->format('Y-m-d H:i:s');

    $dateRange->ended = $DateTime->modify('last day of this month')
        ->setTime(23,59,59)
        ->format('Y-m-d H:i:s');

    return $dateRange;
}
