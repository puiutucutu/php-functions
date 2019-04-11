/**
 * Removes array items that double negate to false (i.e., are falsely).
 *
 * @param array $items
 * @param bool  $shouldReindex Whether to preserve original array keys or
 *                             reindex them from zero.
 *
 * @return array
 * @throws \UnexpectedValueException When a multidimensional array is passed
 */
function filterFalseyValues2(array $items, $shouldReindex = false)
{
    foreach ($items as $item) {
        if (is_array($item)) {
            throw new UnexpectedValueException(
                "Expected only a 1-d array, instead received a multidimensional array"
            );
        }
    }

    $filtered = array_filter($items, function($item) {
        return !!$item;
    });

    return $shouldReindex ? array_values($filtered) : $filtered;
}
