<?php

/**
 * @param string $s
 *
 * @return string
 */
function wrapWithSpaces($s)
{
    $space = chr(32);

    return $space . $s . $space;
}