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

    /**
     * @test
     */
    function it_cannot_generate_zero_or_negative_numbers()
    {
        $this->expectException(\Exception::class);

        $numerals = new RomanNumerals();
        $numerals->generate(0);
    }

    function numerals()
    {
        return [
            ['I', 1],
            ['II', 2],
            ['III', 3],
            ['IV', 4],
            ['V', 5],
            ['VI', 6],
            ['VII', 7],
            ['VIII', 8],
            ['IX', 9],
            ['X', 10],
        ];
    }

}
