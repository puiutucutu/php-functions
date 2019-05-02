<?php

function inArrayOrAdd($needle, &$haystack) {
    if (!in_array($needle, $haystack)) {
        $haystack[] = $needle;
    };
}
