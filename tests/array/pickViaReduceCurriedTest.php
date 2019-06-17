<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "src/array/pickViaReduceCurried.php";

final class pickViaReduceCurriedTest extends TestCase
{
    public function testReturnsExpectedValueWhenArrayIsEmpty() : void
    {
        $this->assertEquals(pickViaReduceCurried ([]) ([]), []);
    }

    public function testReturnsExpectedValue() : void
    {
        $data = [
            "id" => 123,
            "brand" => "bmw",
            "model" => "7 Series",
        ];

        $this->assertEquals(
            pickViaReduceCurried (["id", "brand"]) ($data),
            ["id" => 123, "brand" => "bmw"]
        );
    }
}