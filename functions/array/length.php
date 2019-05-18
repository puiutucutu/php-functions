<?php

function length($xs) {
    $tail = array_slice($xs, 1);
    return $xs === [] ? 0 : length($tail) + 1;
}
