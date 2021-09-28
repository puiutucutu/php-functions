<?php

/**
 * @param array      $xs
 * @param string     $key
 * @param null|mixed $default
 *
 * @return null|mixed
 */
function getProp(array $xs, $key, $default = null)
{
    return hasKey($key, $xs) ? $xs[$key] : $default;
}
