<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . "array/flatten.php";

final class flattenTest extends TestCase
{
    protected $testData = [
        "userId" => 1,
        "id" => 1,
        "title" => "delectus aut autem",
        "completed" => false,
        "fruits" => [
            "apple",
            "orange",
            "banana"
        ]
    ];

    public function testReturnsExpectedValue() : void
    {
        $flattened = flatten($this->testData);
        $expectedOutput = [
            1,
            1,
            "delectus aut autem",
            false,
            "apple",
            "orange",
            "banana"
        ];

        $this->assertEquals($expectedOutput, $flattened);
    }
}