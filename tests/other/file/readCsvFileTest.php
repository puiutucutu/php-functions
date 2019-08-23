<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class readCsvFileTest extends TestCase
{
    public function filePathProvider() : array
    {
        return [[__DIR__ . DIRECTORY_SEPARATOR . "readCsvFileTest.csv"]];
    }

    /**
     * @dataProvider filePathProvider
     * @param string $filePath
     */
    public function testReadsCsvFile($filePath) : void
    {
        $csvData = readCsvFile($filePath, true);
        $expected = [
            0 => [
                "column one" => "a",
                "column two" => "b",
                "column three" => "c",
            ],
            1 => [
                "column one" => "d",
                "column two" => "e",
                "column three" => "f",
            ],
            2 => [
                "column one" => "g",
                "column two" => "h",
                "column three" => "i",
            ],
        ];
        $this->assertEquals(
            $csvData,
            $expected
        );
    }

    /**
     * @dataProvider filePathProvider
     * @param string $filePath
     */
    public function testReadTwoLines($filePath) : void
    {
        $csvData = readCsvFile($filePath, true, 2);
        $expected = [
            0 => [
                "column one" => "a",
                "column two" => "b",
                "column three" => "c",
            ],
            1 => [
                "column one" => "d",
                "column two" => "e",
                "column three" => "f",
            ],
        ];
        $this->assertEquals(
            $csvData,
            $expected
        );
    }

    /**
     * @dataProvider filePathProvider
     * @param string $filePath
     */
    public function testReadNoLines($filePath) : void
    {
        $csvData = readCsvFile($filePath, true, 0);
        $this->assertEquals($csvData, []);
    }
}
