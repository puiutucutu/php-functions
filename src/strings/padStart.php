<?php

/**
 * Replicates behaviour of JavaScript `String.prototype.padStart()`
 *
 * @param int    $targetLength
 * @param string $target
 * @param string $padString
 *
 * @return string
 * @see https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/padStart
 */
function padStart($targetLength, $target, $padString = " ")
{
    if (strlen($target) === $targetLength) {
        return $target;
    }

    $padded = str_repeat($padString, $targetLength - strlen($target));

    return "{$padded}{$target}";
}
