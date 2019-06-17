<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "src/array/chunk.php";

final class chunkTest extends TestCase
{
    public function testInvalidArgumentExceptionIsThrownWhenChunkSizeIsZero() : void
    {
        $this->expectException(InvalidArgumentException::class);
        chunk([1, 2, 3, 4, 5, 6, 7, 8], 0);
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

    public function testReturnsExpectedValueWhenArrayHasTwoValues() : void
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

    public function testReturnsExpectedValueWhenArrayHasThreeValues() : void
    {
        $chunked = chunk([1,2,3], 3);
        $chunkedExpected = [
            [1,2,3]
        ];

        sort($chunked);
        sort($chunkedExpected);

        $this->assertEquals(
            $chunked,
            $chunkedExpected
        );
    }

    public function testReturnsExpectedValueWhenArrayHasFourValues() : void
    {
        $chunked = chunk([1,2,3,4], 3);
        $chunkedExpected = [
            [1,2,3],
            [4],
        ];

        sort($chunked);
        sort($chunkedExpected);

        $this->assertEquals(
            $chunked,
            $chunkedExpected
        );
    }

    public function testReturnsExpectedValueWhenArrayHasManyValues() : void
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
}