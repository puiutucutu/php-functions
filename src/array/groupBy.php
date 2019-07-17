<?php

/*

// before

$temp = [
  ["brand" => "BMW", "model" => "3 Series"],
  ["brand" => "Mercedes", "model" => "G Klasse"],
];

// after

$temp = [
  "BMW" => ["model" => "3 Series"],
  "Mercedes" => ["model" => "G Klasse"],
];

*/

/**
 * @param string $key
 * @param array  $xs
 *
 * @return array
 * @throws \Exception
 */
function groupBy($key, array $xs)
{
    $out = [];
    foreach ($xs as $x) {
        if (!array_key_exists($key, $x)) {
            $index = key($xs);
            throw new \Exception(
                "Supplied array key `{$key}` not found in original array at index `({$index})`"
            );
        }
        $out[$x[$key]][] = $x;
    }

    return $out;
}
