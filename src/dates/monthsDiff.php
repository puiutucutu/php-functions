<?php

/**
 * @param string $start
 * @param string $end
 * @return int
 * @throws \Exception
 */
function monthsDiff($start, $end)
{
    $d1 = new DateTime($start);
    $d2 = new DateTime($end);
    $diff = $d2->diff($d1);

    return (($diff->y) * 12) + ($diff->m);
}
