<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . "chunk.php";

final class chunkTest extends TestCase
{
    public function testReturnsExpectedValue() : void
    {
        $chunked = chunk([1, 2, 3, 4, 5, 6, 7, 8], 3);
        $chunkedExpected = [
            [1, 2, 3],
            [4, 5, 6],
            [7, 8]
        ];

        sort($chunked);
        sort($chunkedExpected);

        $this->assertEquals(
            $chunked,
            $chunkedExpected
        );
    }

    public function testReturnsExpectedValueWhenArrayIsEmpty() : void
    {
        $this->assertEquals(chunk([], 3), []);
    }

    public function testReturnsExpectedValueWhenArrayHasOnlyOneValue() : void
    {
        $chunked = chunk([1], 3);
        $chunkedExpected = [
            [1]
        ];

        sort($chunked);
        sort($chunkedExpected);

        $this->assertEquals(
            $chunked,
            $chunkedExpected
        );
    }

    public function testReturnsExpectedValueWhenArrayHasOnlyTwoValues() : void
    {
        $chunked = chunk([1,2], 3);
        $chunkedExpected = [
            [1,2]
        ];

        sort($chunked);
        sort($chunkedExpected);

        $this->assertEquals(
            $chunked,
            $chunkedExpected
        );
    }
}