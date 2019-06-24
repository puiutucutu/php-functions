<?php

/**
 * @param array $values
 *
 * @return array
 */
function filterFalsey(array $values)
{
    return array_filter(
        $values,
        function ($value) {
            return !!$value;
        }
    );
}
