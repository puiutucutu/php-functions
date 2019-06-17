<?php

require_once "getDateTimeTwelveHoursAgo.php";
require_once "roundDownToHour.php";

/**
 * @return \DateTime
 * @throws \Exception
 */
function getDateTimeTwelveHoursAgoRoundedDownToHour()
{
    return roundDownToHour(getDateTimeTwelveHoursAgo());
}
