<?php

/**
 * @param array $toTest
 *
 * @return bool
 * @throws \InvalidArgumentException When array is not one dimensional
 */
function containsDuplicates(array $toTest)
{
    foreach ($toTest as $value) {
        if (is_array($value)) {
            throw new \InvalidArgumentException(
                "Array must be one dimensional"
            );
        }
    }

    return count($toTest) > count(array_unique($toTest));
}
