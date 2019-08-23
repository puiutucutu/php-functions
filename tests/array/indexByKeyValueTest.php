<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class indexByKeyValueTest extends TestCase
{
    protected $testData = [
        [
            "userId" => 1,
            "id" => 1,
            "title" => "delectus aut autem",
            "completed" => false
        ],
        [
            "userId" => 1,
            "id" => 2,
            "title" => "quis ut nam facilis et officia qui",
            "completed" => false
        ],
        [
            "userId" => 1,
            "id" => 3,
            "title" => "fugiat veniam minus",
            "completed" => false
        ],
    ];

    public function testReturnsArrayWithExpectedKeys() : void
    {
        $expectedData = [
            "delectus aut autem" => [
                "userId" => 1,
                "id" => 1,
                "title" => "delectus aut autem",
                "completed" => false
            ],
            "quis ut nam facilis et officia qui" => [
                "userId" => 1,
                "id" => 2,
                "title" => "quis ut nam facilis et officia qui",
                "completed" => false
            ],
            "fugiat veniam minus" => [
                "userId" => 1,
                "id" => 3,
                "title" => "fugiat veniam minus",
                "completed" => false
            ],
        ];

        $this->assertEquals(
            indexByKeyValue($this->testData, "title"),
            $expectedData
        );
    }

    public function
    testThrowsOutOfBoundsExceptionWhenKeyNameDoesNotExistInArrayElements() : void
    {
        $this->expectException(OutOfBoundsException::class);
        indexByKeyValue($this->testData, "username");
    }

    public function
    testExceptionMessageIsCorrectWhenKeyNameDoesNotExistInArrayElements() : void
    {
        $this->expectExceptionMessage("Key name `username` does not exist on item at index `0`");
        indexByKeyValue($this->testData, "username");
    }
}
