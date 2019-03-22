<?php

/**
 * @param array  $arr
 * @param string $key
 *
 * @return bool
 */
function hasKey(array $arr, $key)
{
    return (
        isset($arr[$key]) or
        array_key_exists($key, $arr)
    );
}
