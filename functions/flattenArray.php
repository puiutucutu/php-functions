<?php

/**
 * @param array $arr
 *
 * @return array
 */
function flattenArray(array $arr)
{
    $return = [];
    foreach ($arr as $item) {
        if (is_array($item)) {
            $return = array_merge($return, flattenArray($item));
        } else {
            $return[] = $item;
        }
    }

    return $return;
}
