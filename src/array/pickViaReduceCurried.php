<?php

require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "src/array/reduceCurried.php";

function pickViaReduceCurried($keys)
{
    return function ($obj) use ($keys)
    {
        return reduceArity
        (
            function ($acc, $currKey) use ($obj) {
                if (isset($obj[$currKey])) {
                    $acc[$currKey] = $obj[$currKey];
                }
                return $acc;
            }
        )
        ([])
        ($keys);
    };
}