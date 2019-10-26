<?php

/**
 * @param string $key
 * @param array  $xs
 *
 * @return bool
 */
function hasKeyAndValue($key, array $xs)
{
    return hasKey($key, $xs) && !!$xs[$key];
}
