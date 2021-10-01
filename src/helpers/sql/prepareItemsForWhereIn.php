<?php

/**
 * @param array $xs
 * @return string
 * @example
 * makeWhereInPredicate(["hello","world"]); //=> 'hello','world'
 */
function makeWhereInPredicate(array $xs)
{
    $wrapWithSingleQuotes = wrapWith("'");
    $prepared = array_map(
        function($el) use ($wrapWithSingleQuotes) {
            return $wrapWithSingleQuotes($el);
        },
        $xs
    );

    return join(",", $prepared);
}
