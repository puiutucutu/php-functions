<?php

function timestamp(DateTime $dt)
{
    return $dt->format("U");
}
