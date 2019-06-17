<?php

/**
 * @param string $bracketType
 *
 * @return \Closure Expects a string to surround with requested bracket type.
 */
function surroundWithBrackets($bracketType)
{
    $bracketTypesList = [
        "parentheses" => [
            "opening" => "(",
            "closing" => ")",
        ],
        "braces" => [
            "opening" => "{",
            "closing" => "}",
        ],
        "brackets" => [
            "opening" => "[",
            "closing" => "]",
        ],
    ];

    if (!in_array($bracketType, array_keys($bracketTypesList))) {
        throw new InvalidArgumentException(
            "Requested bracket `${bracketType}` is not valid"
        );
    }

    return function($x) use ($bracketType, $bracketTypesList) {
        $bracketCharacters = $bracketTypesList[$bracketType];
        $start = $bracketCharacters["opening"];
        $end = $bracketCharacters["closing"];

        return "${start}${x}${end}";
    };
}

/*

$myStr = "abc";
$myStrBracketed = surroundWithBrackets ("braces") ($myStr);

*/
