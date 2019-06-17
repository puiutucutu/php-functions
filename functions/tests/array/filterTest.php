<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "array/filter.php";

final class filterTest extends TestCase
{
    public function testReturnsExpectedValue() : void
    {
        $filterThis = [1, 2, 3, 4, 5, 6];
        $filterClosure = function ($value, $key) {
            return $value & 1; // returns only odd values
        };

        $result = filter($filterThis, $filterClosure);

        $expected = [
            "0" => 1,
            "2" => 3,
            "4" => 5
        ];

        $this->assertEquals($result, $expected);
    }
}