<?php

abstract class Bracket
{
    private $openingBrace = "";

    private $closingBrace = "";

    protected function __construct($openingBrace, $closingBrace)
    {
        $this->openingBrace = $openingBrace;
        $this->closingBrace = $closingBrace;
    }

    public function getOpeningBrace()
    {
        return $this->openingBrace;
    }

    public function getClosingBrace()
    {
        return $this->closingBrace;
    }
}

final class ParenthesesBracket extends Bracket
{
    public function __construct()
    {
        parent::__construct("(", ")");
    }
}

final class BracesBracket extends Bracket
{
    public function __construct()
    {
        parent::__construct("{", "}");
    }
}

final class SquareBrackets extends Bracket
{
    public function __construct()
    {
        parent::__construct("[", "]");
    }
}

/**
 * @param \Bracket $bracketType
 *
 * @return \Closure Expects a string to surround with requested bracket type.
 */
function surroundWithBracketsLocal(Bracket $bracketType)
{
    return function($x) use ($bracketType) {
        $start = $bracketType->getOpeningBrace();
        $end = $bracketType->getClosingBrace();
        return "${start}${x}${end}";
    };
}

/*

$myStr = "abc";
$myStrBracketed = surroundWithBracketsLocal (new BracesBracket()) ($myStr);

var_dump($myStrBracketed);

*/
