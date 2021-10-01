<?php

/**
 * @param array  $xs
 * @param string $key
 *
 * @return array
 */
function getProps(array $xs, $key)
{
    return array_map(
        function($x) use ($key) {
            return getProp($x, $key);
        },
        $xs
    );
}
