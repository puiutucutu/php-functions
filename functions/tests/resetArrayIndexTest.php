<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . "resetArrayIndex.php";

final class resetArrayIndexTest extends TestCase
{
    public function testReturnsExpectedValues() : void
    {
        $data = [
            0 => "abc",
            1 => "def",
            3 => "ghi",
        ];

        $indexed = resetArrayIndex($data);
        $indexKeys = array_keys($indexed);

        $this->assertEquals(
            $indexKeys,
            [0,1,2]
        );
    }
}