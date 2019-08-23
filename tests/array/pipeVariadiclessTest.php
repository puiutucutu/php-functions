<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class pipeVariadiclessTest extends TestCase
{
    public function testReturnsExpectedValue() : void
    {
        /**
         * @param int $toAdd
         *
         * @return int
         */
        $addOne = function (int $toAdd) {
            return $toAdd + 1;
        };

        /**
         * @param int $toMultiply
         *
         * @return float|int
         */
        $multiplyByTwo = function (int $toMultiply) {
            return $toMultiply * 2;
        };

        /**
         * @param int $toMultiply
         *
         * @return float|int
         */
        $multiplyByThree = function (int $toMultiply) {
            return $toMultiply * 3;
        };

        /**
         * @var closure $addsOneThenMultipliesByTwoThenByThree
         */
        $pipedResult = pipe(
            $addOne,
            $multiplyByTwo,
            $multiplyByThree
        )(5);

        $this->assertEquals($pipedResult, 36);
    }
}
