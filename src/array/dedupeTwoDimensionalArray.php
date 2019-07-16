/*

$temp = [];
$temp[] = [
    "a" => 1,
    "b" => 2,
    "c" => 3,
];

$temp[] = [
    "b" => 2,
    "c" => 3,
    "a" => 1,
];

print_r($temp);
print_r(dedupeTwoDimensionalArray($temp));
die;

*/

function dedupeTwoDimensionalArray(array $xs)
{
    if (count($xs) === 0) {
        return $xs;
    }

    $originalKeys = array_keys($xs[0]);
    $deduped = [];
    foreach ($xs as $k => $x) {
        $sorted = array_reverse($x);
        asort($sorted);
        $deduped[] = array_values($sorted);
    }

    $deduped = array_unique($deduped, SORT_REGULAR);

    $final = [];
    foreach ($deduped as $k => $v)
    {
        $final[] = array_combine($originalKeys, $v);
    }

    return $final;
}
