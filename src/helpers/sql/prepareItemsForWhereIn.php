<?php

/**
 * @param array $xs
 * @return string
 * @example
 * prepareItemsForWhereIn(["hello","world"]); //=> 'hello','world'
 */
function prepareItemsForWhereIn(array $xs)
{
    $wrapWithSingleQuotes = wrapWith("'");
    $prepared = array_map(function($el) use ($wrapWithSingleQuotes) {
        return $wrapWithSingleQuotes($el);
    }, $xs);

    return join(",", $prepared);
}
