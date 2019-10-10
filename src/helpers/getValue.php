<?php

/**
 * @param mixed  $placeholder Value to be returned if key does have a value in
 *                            the supplied array.
 * @param string $key         The key name to retrieve the array value from.
 * @param array  $xs          An array that will be treated as if it were one
 *                            dimensional.
 *
 * @return mixed Either <V> of <K,V> in the array or the placeholder.
 * @example
 *
 * $xs = [
 *     "bmw" => ["id" => 123, model =>"X6"],
 *     "mercedes" => ["id" => 456, "model" => "G Klasse"]
 * ];
 *
 * getValue([], "mercedes", $xs); //=> ["id" => 456, "model" => "G Klasse"]
 * getValue([], "toyota", $xs); //=> []
 *
 */
function getValue($placeholder, $key, array $xs)
{
    return isset($xs[$key]) ? $xs[$key] : $placeholder;
}
