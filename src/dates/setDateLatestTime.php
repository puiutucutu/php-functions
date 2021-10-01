<?php

/**
 * @param \DateTime $dt
 * @return \DateTime|false
 */
function setDateLatestTime(DateTime $dt)
{
    return $dt->setTime(23, 59, 59);
}
