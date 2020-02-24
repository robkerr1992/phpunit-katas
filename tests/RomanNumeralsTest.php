<?php

use App\RomanNumerals;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{
    /**
     * @test
     *  @dataProvider numerals
     */
    function it_generates_the_roman_numerals($expectedResult, $number)
    {
        $numerals = new RomanNumerals();
        $this->assertEquals($expectedResult, $numerals->generate($number));
    }

    function numerals()
    {
        return [
            ['I', 1],
            ['II', 2],
            ['III', 3],
            ['IV', 4],
        ];
    }

}
