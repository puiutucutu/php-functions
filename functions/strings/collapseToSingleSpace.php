<?php

/**
 * Collapses multiple spaces to a single space in a string.
 *
 * @param $string
 *
 * @return string
 */
function collapseToSingleSpace($string)
{
    return preg_replace("/\s+/", " ", $string);
}
