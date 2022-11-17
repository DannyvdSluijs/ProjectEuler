<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler;

use Dannyvandersluijs\ProjectEuler\Utils\IsPrimeTrait;

class Problem005
{
    use IsPrimeTrait;

    public function __invoke(): string
    {
        $divisors = range(1, 20);
        $primes = array_filter($divisors, fn(int $divisor): bool => $this->isPrime($divisor));
        $productOfPrimes = array_reduce($primes, fn(int $prime, int $carry): int => $carry * $prime, 1);

        $i = $productOfPrimes;

        while (true) {
            if ($this->isEvenlyDivisible($i, $divisors)) {
                return (string) $i;
            }

            $i += $productOfPrimes;
        }
    }

    private function isEvenlyDivisible(int $number, array $divisors): bool
    {
        foreach ($divisors as $divisor) {
            if ($number % $divisor !== 0) {
                return false;
            }
        }

        return true;
    }
}
