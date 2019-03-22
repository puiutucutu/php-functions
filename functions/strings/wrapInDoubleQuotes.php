<?php

/**
 * Wrap a string in double quotes.
 *
 * @param $string
 *
 * @return string
 */
function wrapInDoubleQuotes($string)
{
    return $string === ""
        ? $string
        : chr(34) . $string . chr(34);
}
