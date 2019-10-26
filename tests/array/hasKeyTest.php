<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class hasKeyTest extends TestCase
{
    public function testReturnsTrueWhenArrayHasValue() : void
    {
        $data = [
            "one" => 1,
            "two" => 2,
            "three" => 3,
        ];

        $this->assertEquals(hasKey("two", $data), true);
    }

    public function testReturnsFalseWhenArrayDoesNotHaveValue() : void
    {
        $data = [
            "one" => 1,
            "two" => 2,
            "three" => 3,
        ];

        $this->assertEquals(hasKey("four", $data), false);
    }

    public function testReturnsTrueWhenArrayContainsNullKey() : void
    {
        $data = [
            null => 1,
        ];

        $this->assertEquals(hasKey(null, $data), true);
    }

    public function testReturnsTrueWhenArrayContainsBooleanFalseKey() : void
    {
        $data = [
            false => 1,
        ];

        $this->assertEquals(hasKey(false, $data), true);
    }

    public function testReturnsTrueWhenArrayContainsBooleanTrueKey() : void
    {
        $data = [
            true => 1,
        ];

        $this->assertEquals(hasKey(true, $data), true);
    }
}
