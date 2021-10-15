<?php

final class DateFormats
{
    public static $DATETIME_FORMAT_ISO8601 = \DateTime::ISO8601;                // 2020-09-17T12:59:26-0400
    public static $DATETIME_FORMAT_ISO8601_MICROSECONDS = "Y-m-d\TH:i:s.uP";    // 2020-09-17T12:59:14.658260-04:00
    public static $DATETIME_FORMAT_FOR_TSQL_DATETIMEOFFSET = "Y-m-d H:i:s.u P"; // 2020-09-17 13:00:04.559542 -04:00
}
