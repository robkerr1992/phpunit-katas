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
        $factors = [];

        for ($divisor = 2; $number > 1; $divisor++) {
            for(;$number % $divisor == 0; $number /= $divisor) {
                $factors[] = $divisor;
            }
        }

        return $factors;
    }

}