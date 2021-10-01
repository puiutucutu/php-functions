<?php

/**
 * @param string $needle
 * @param string $haystack
 *
 * @return bool
 */
function contains($needle, $haystack)
{
    return $needle !== "" && mb_strpos($haystack, $needle) !== false;
}
