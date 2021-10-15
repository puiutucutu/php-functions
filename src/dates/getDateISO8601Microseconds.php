<?php

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . "dates/DateFormats.php";

/**
 * @return string
 */
function getDateISO8601Microseconds()
{
    return (new DateTime())->format(
        DateFormats::$DATETIME_FORMAT_ISO8601_MICROSECONDS
    );
}
