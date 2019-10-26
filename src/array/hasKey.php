<?php

/**
 * @param string $k
 * @param array  $xs An array to check the existence of the key against (only
 *                   array keys of the first dimension will be checked).
 *
 * @return bool
 */
function hasKey($k, array $xs)
{
    return (
        isset($xs[$k]) or
        array_key_exists($k, $xs)
    );
}
