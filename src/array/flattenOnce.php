<?php

/**
 * @param array $xs
 *
 * @return array
 */
function flattenOnce(array $xs)
{
    return call_user_func_array("array_merge", $xs);
}
