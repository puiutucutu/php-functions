<?php

/**
 * Returns the date range of the start date of a number of weeks back and the
 * current date
 *
 * @param $weeksBack
 *
 * @return object
 * @throws \Error
 * @throws Exception
 */
function dateRangeWeeksBackFromToday($weeksBack)
{
    if (!filter_var($weeksBack, FILTER_VALIDATE_INT)) {
        throw new \Error('integer not provided');
    }

    // create object to store date ranges
    $dateRange = (object)[];

    // calculate the start date and end date going a number of weeks back
    $dateRange->rangeStart = (new DateTime)->modify('-1 week');

    return $dateRange;
}
