<?php

/**
 * @param array $xs
 *
 * @return bool
 * @throws \InvalidArgumentException When array is not one dimensional
 */
function containsDuplicates(array $xs)
{
    foreach ($xs as $x) {
        if (is_array($x)) {
            throw new \InvalidArgumentException(
                "Array must be one dimensional"
            );
        }
    }

    return count($xs) > count(array_unique($xs));
}
