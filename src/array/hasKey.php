<?php

/**
 * @param array  $xs
 * @param string $key
 *
 * @return bool
 */
function hasKey(array $xs, $key)
{
    return (
        isset($xs[$key]) or
        array_key_exists($key, $xs)
    );
}
