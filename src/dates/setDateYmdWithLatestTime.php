<?php

function setDateYmdWithLatestTime(DateTime $dt)
{
    return $dt->setTime(23, 59, 59)->format("Y-m-d H:i:s");
}
