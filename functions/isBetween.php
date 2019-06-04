<?php

/**
 * @param float $start
 * @param float $end
 * @param float $testTarget
 *
 * @return bool
 */
function isBetween($start, $end, $testTarget)
{
    return $testTarget >= $start && $testTarget <= $end;
}
