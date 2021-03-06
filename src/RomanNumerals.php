<?php


namespace App;


class RomanNumerals
{
    CONST NUMERALS = [
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I',
    ];

    public function generate($number)
    {
        if($number < 1 || $number > 3999) {
            throw new \Exception();
        }

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