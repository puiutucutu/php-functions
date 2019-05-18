<?php

/**
 * Formats a date to appear as June 18th 2016 at 10:58am
 *
 * @param string $date
 *
 * @return string
 * @throws Exception
 */
function formatDateAsReadable($date)
{
    return (new DateTime($date))->format('F jS Y \a\t g:ia');
}
