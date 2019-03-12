<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . "resetArrayIndex.php";

final class resetArrayIndexTest extends TestCase
{
    public function testReturnsArrayWithExpectedKeys() : void
    {
        $data = [
            0 => "abc",
            1 => "def",
            3 => "ghi",
        ];

        $reIndexed = resetArrayIndex($data);
        $indexKeys = array_keys($reIndexed);

        $this->assertEquals(
            $indexKeys,
            [0, 1, 2]
        );
    }

    public function testReturnsArrayWithValuesInProperOrder() : void
    {
        $inputArr = [
            0 => "abc",
            1 => "def",
            3 => "ghi",
        ];

        $expectedArr = [
            0 => "abc",
            1 => "def",
            2 => "ghi",
        ];

        $this->assertEquals(resetArrayIndex($inputArr), $expectedArr);
    }

    public function testHandlesEmptyArraysGracefully() : void
    {
        $this->assertEquals(resetArrayIndex([]), []);
    }
}