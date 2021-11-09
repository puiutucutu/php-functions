<?php

function makeDateYmdWithMinTime(DateTime $dt)
{
    return $dt->setTime(0, 0, 0)->format("Y-m-d H:i:s");
}

