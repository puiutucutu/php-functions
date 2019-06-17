<?php

/**
 * @param array  $target
 * @param string $keyName
 *
 * @return bool
 */
function hasKeyAndValue(array $target, $keyName)
{
    return hasKey($target, $keyName) && !!$target[$keyName];
}
