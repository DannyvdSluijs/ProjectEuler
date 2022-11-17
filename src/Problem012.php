<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler;

class Problem012
{
    public function __invoke(): string
    {
        $i = 1;
        while (true) {
            $number = $this->getTriangleNumber($i);
            $divisors = $this->getNumberDivisors($number);

            if ($divisors > 500) {
                return (string) $number;
            }

            $i++;
        }

    }

    private function getTriangleNumber($number) {
        return (($number * $number - $number) / 2) + $number;
    }

    private function getNumberDivisors($number) {
        $primeFactors = [
            2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59,
            61, 67, 71, 73, 79, 83, 89, 97, 101
        ];
        $result = array_fill_keys($primeFactors, 0);

        foreach($primeFactors as $primeFactor) {
            while ($number % $primeFactor === 0) {
                $result[$primeFactor]++;
                $number /= $primeFactor;
            }
        }

        $totalDivisors = 1;
        foreach ($result as $primeFactor => $count) {
            if ($count > 0) {
                $totalDivisors *= ($count + 1);
            }
        }

        return $totalDivisors;
    }
}
