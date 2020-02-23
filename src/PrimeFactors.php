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
        $divisor = 2;
        while ($number > 1) {
            while($number % $divisor == 0) {
                $factors[] = $divisor;
                $number = $number / $divisor;
            }
            $divisor++;
        }
        return $factors;
    }

}