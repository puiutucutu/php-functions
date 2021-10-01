<?php

/**
 * @param array $xs
 * @return array|false
 */
function head(array $xs)
{
    if (empty($xs)) return [];
    list($x) = $xs;

    return $x;
}
