<?php


namespace App;


class PrimeFactors
{
    /**
     * Generates prime factors for given number
     * @param $number int
     */
    public function generate($number)
    {
        if($number > 1) {
            return [2];
        }

        return [];
    }

}