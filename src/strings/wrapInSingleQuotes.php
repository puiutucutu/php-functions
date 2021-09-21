<?php

/**
 * Wraps a string in single quotes.
 *
 * @param $string
 *
 * @return string
 */
function wrapInSingleQuotes($string)
{
    return $string === "" ? $string : chr(39) . $string . chr(39);
}
