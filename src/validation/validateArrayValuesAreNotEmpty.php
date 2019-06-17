<?php

/**
 * @param array $arr
 *
 * @throws \InvalidArgumentException
 */
function validateArrayValuesAreNotEmpty(array $arr)
{
    foreach ($arr as $k => $v) {
        if (is_array($arr)) {
            validateArrayValuesAreNotEmpty($arr);
        }
        if (empty($v)) {
            throw new \InvalidArgumentException(
                "Value for key `${k}` cannot be empty"
            );
        }
    }
}
