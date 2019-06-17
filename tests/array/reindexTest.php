<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "array/reindex.php";

final class reindexTest extends TestCase
{
    public function testReturnsArrayWithExpectedKeys() : void
    {
        $data = [
            0 => "abc",
            1 => "def",
            3 => "ghi",
        ];

        $reIndexed = reindex($data);
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

        $this->assertEquals(reindex($inputArr), $expectedArr);
    }

    public function testHandlesEmptyArraysGracefully() : void
    {
        $this->assertEquals(reindex([]), []);
    }
}