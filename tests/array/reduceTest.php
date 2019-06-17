<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "src/array/reduce.php";

final class reduceTest extends TestCase
{
    public function testReturnsExpectedValue() : void
    {
        $xs = [1, 2, 3, 4];
        $reducer = function ($sum, $toAdd) {
            return ($sum + 1) * $toAdd;
        };

        $numsAddedByReducing = reduce($reducer, 0, $xs);

        $this->assertEquals(
            $numsAddedByReducing,
            64
        );
    }
}