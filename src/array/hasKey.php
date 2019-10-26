<?php

/**
 * @param string $key
 * @param array  $xs
 *
 * @return bool
 */
function hasKey($key, array $xs)
{
    return (
        isset($xs[$key]) or
        array_key_exists($key, $xs)
    );
}
