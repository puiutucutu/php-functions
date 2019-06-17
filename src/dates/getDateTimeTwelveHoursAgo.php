<?php

/**
 * @return \DateTime
 * @throws \Exception
 */
function getDateTimeTwelveHoursAgo()
{
    return (new \DateTime())->sub(new \DateInterval('PT12H'));
}
