<?php

/**
 * Collapses an array of strings into a single string delimited with a
 * semicolon.
 *
 * @param array $values
 *
 * @return string
 */
function collapseToColonDelimitedString(array $values)
{
    return implode(";", $values);
}
