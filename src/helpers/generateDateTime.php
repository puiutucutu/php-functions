<?php

/**
 * Creates a string value compatible with the TSQL datetime column type.
 *
 * @see https://docs.microsoft.com/en-us/sql/t-sql/data-types/datetime-transact-sql?view=sql-server-2017
 * @return string A string like `2007-05-08 12:35:29.123`
 */
function generateDateTime()
{
    return date_format(date_create(), "Y-m-d H:i:s");
}
