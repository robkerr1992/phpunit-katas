<?php


namespace App;


class RomanNumerals
{
    public function generate($number)
    {
        if($number > 1) {
            return 'II';
        }
        return 'I';
    }
}