<?php

use App\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    /**
     * @test
     * @dataProvider factors
     * @param $number
     * @param $expectedResult
     */
    function it_generates_prime_factors($number, $expectedResult)
    {
        $factors = new PrimeFactors();

        $this->assertEquals($expectedResult, $factors->generate($number));
    }

    function factors()
    {
        return [
            [1, []],
            [2, [2]],
            [3, [3]],
            [4, [2,2]],
            [5, [5]],
            [6, [2,3]],
            [8, [2,2,2]],
        ];
    }
}
