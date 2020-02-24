<?php


namespace App;


class RomanNumerals
{
    CONST NUMERALS = [
        5 => 'V',
        4 => 'IV',
        1 => 'I',
    ];

    public function generate($number)
    {
        $result = '';

        foreach (static::NUMERALS as $arabic => $numeral) {
            while($number >= $arabic) {
                $result .= $numeral;
                $number -= $arabic;
            }
        }


        return $result;
    }
}