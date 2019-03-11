<?php

/**
 * @param array $values
 *
 * @return array
 */
function filterFalseyValues(array $values)
{
    return array_filter(
        $values,
        function($value) {
            return !!$value;
        }
    );
}
