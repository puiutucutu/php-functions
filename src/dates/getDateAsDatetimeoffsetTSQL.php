<?php

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . "dates/DateFormats.php";

/**
 * Matches expected TSQL column type of `datetimeoffset(7)`.
 *
 * @return string string(33) "2020-09-17 12:47:19.402280 -04:00"
 */
function getDateAsDatetimeoffsetTSQL()
{
    return (new DateTime())->format(
        DateFormats::$DATETIME_FORMAT_FOR_TSQL_DATETIMEOFFSET
    );
}
