<?php

/**
 * Returns the date range of tht date of a number of weeks back and the current
 * date
 *
 * @param $monthsBack
 *
 * @return object
 * @throws Exception
 */
function dateRangeMonthsBackFromToday($monthsBack)
{
    // create object to store date ranges
    $dateRange = (object)[];

    // date a number of months back
    $dateRange->rangeStart = (new DateTime)->modify(sprintf( '%d month', $monthsBack * -1))
        ->modify('first day of this month')
        ->format('Y-m-d');

    // date today
    $dateRange->rangeEnd = (new DateTime)->modify('first day of this month')
        ->format('Y-m-d');

    return $dateRange;
}
