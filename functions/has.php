<?php

/**
 * @param array  $arr
 * @param string $key
 *
 * @return bool
 */
function has(array $arr, $key)
{
    return isset($arr[$key]) or array_key_exists($key, $arr);
}
