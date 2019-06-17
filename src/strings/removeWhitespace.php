<?php

/**
 * Removes whitespace of any form with the exception of non-breaking spaces.
 *
 * @param $string
 *
 * @return string
 */
function removeWhitespace($string)
{
    return preg_replace("/\s+/", "", $string);
}
