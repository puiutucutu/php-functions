<?php

/**
 * @param \DateTime $dt
 * @return \DateTime|false
 */
function makeDateMinTime(DateTime $dt)
{
    return $dt->setTime(0, 0, 0);
}
