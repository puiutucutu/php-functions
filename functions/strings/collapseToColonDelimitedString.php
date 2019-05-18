<?php

/**
 * Collapses an array of strings into a single string delimited with a
 * semicolon.
 *
 * @param array $xs
 *
 * @return string
 */
function collapseToColonDelimitedString(array $xs)
{
    return implode(";", $xs);
}
