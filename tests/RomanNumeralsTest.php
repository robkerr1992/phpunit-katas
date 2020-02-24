<?php

use App\RomanNumerals;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{
    /** @test */
    function it_generates_the_roman_numeral_for_1()
    {
        $numerals = new RomanNumerals();
        $this->assertEquals('I', $numerals->generate(1));
    }

}
