<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "src/array/pipe.php";

final class pipeTest extends TestCase
{
    public function testReturnsExpectedValue() : void
    {
        /**
         * @param int $toAdd
         *
         * @return int
         */
        $addOne = function (int $toAdd) {
            return $toAdd + 1;
        };

        /**
         * @param int $toMultiply
         *
         * @return float|int
         */
        $multiplyByTwo = function (int $toMultiply) {
            return $toMultiply * 2;
        };

        /**
         * @param int $toMultiply
         *
         * @return float|int
         */
        $multiplyByThree = function (int $toMultiply) {
            return $toMultiply * 3;
        };

        /**
         * @var closure $addsOneThenMultipliesByTwoThenByThree
         */
        $pipedResult = pipe(
            $addOne,
            $multiplyByTwo,
            $multiplyByThree
        )(5);

        $this->assertEquals($pipedResult, 36);
    }

    public function testReturnsExpectedValueForAnotherExample() : void
    {
        /**
         * @param string $text
         *
         * @return string
         */
        $h1 = function (string $text) {
            return "<h1>${text}</h1>";
        };

        /**
         * @param string $text
         *
         * @return string
         */
        $appendNewLine = function(string $text) {
            return $text . "\n\r";
        };

        /**
         * @param string $text
         *
         * @return string
         */
        $appendNewLineAsHtmlLineBreak = function(string $text) {
            return nl2br($text);
        };

        $createHeadingLambda = pipe(
            $h1,
            $appendNewLine,
            $appendNewLineAsHtmlLineBreak
        );

        $this->assertEquals(
            $createHeadingLambda("hello world"),
            "<h1>hello world</h1><br />\n\r"
        );
    }
}