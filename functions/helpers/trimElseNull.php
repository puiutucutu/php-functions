<?php

/**
 * @param string $s
 *
 * @return null|string
 */
function trimElseNull($s)
{
    return !!$s ? trim($s) : null; // a valid string evaluates TRUE when double negated
}
