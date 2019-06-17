<?php

require_once "getDateTimeNow.php";
require_once "roundDownToHour.php";

/**
 * @return \DateTime
 * @throws \Exception
 */
function getDateTimeRoundedDownToHour()
{
    return roundDownToHour(getDateTimeNow());
}
