<?php

/**
 * @param array $xs
 *
 * @return array
 */
function flatten(array $xs)
{
    $return = [];
    foreach ($xs as $x) {
        if (is_array($x)) {
            $return = array_merge($return, flatten($x));
        } else {
            $return[] = $x;
        }
    }

    return $return;
}
