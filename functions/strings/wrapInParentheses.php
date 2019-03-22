<?php

/**
 * @param $string
 *
 * @return string
 */
function wrapInParentheses($string)
{
    return chr(40) . $string . chr(41);
}