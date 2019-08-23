<?php

/**
 * @param array $items
 *
 * @return string
 */
function prepareItemsForWhereIn(array $items)
{
    $wrapWithSingleQuotes = wrapWith("'");
    $prepared = array_map(function($el) use ($wrapWithSingleQuotes) {
        return $wrapWithSingleQuotes($el);
    }, $items);

    return join(",", $prepared);
}
