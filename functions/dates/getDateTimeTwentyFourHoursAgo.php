<?php

/**
 * @return \DateTime
 * @throws \Exception
 */
function getDateTimeTwentyFourHoursAgo()
{
    $start = new \DateTime();
    $start->sub(new \DateInterval("P1D")); // subtract period of 1 day

    return $start;
}
