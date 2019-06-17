<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "src/array/getArrayValue.php";

final class getArrayValueTest extends TestCase
{
    protected $testData = [
        "userId" => 1,
        "id" => 1,
        "title" => "sample title",
        "completed" => false
    ];

    public function testReturnsExpectedValue() : void
    {
        $this->assertEquals(
            getArrayValue($this->testData, "title"),
            "sample title"
        );
    }

    public function
    testOutOfBoundsExceptionThrownWhenKeyNameDoesNotExistInArray() : void
    {
        $this->expectException(\OutOfBoundsException::class);
        getArrayValue([], "title");
    }

    public function
    testExceptionMessageIsCorrectWhenKeyNameDoesNotExistInArray() : void
    {
        $this->expectExceptionMessage("Array does not contain key with name: `username`");
        getArrayValue($this->testData, "username");
    }
}