<?php

/**
 * @param array $xs
 *
 * @return array
 */
function filterFalsey(array $xs)
{
    return array_filter($xs, function($x) {
        return !!$x;
    });
}
