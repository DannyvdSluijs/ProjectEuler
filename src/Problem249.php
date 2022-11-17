<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler;

use Dannyvandersluijs\ProjectEuler\Utils\IsPrimeTrait;

class Problem249
{
    use IsPrimeTrait;

    public function __invoke(): string
    {
        $primes = [2];
        // Determine all the primes below 5000
        for ($i = 3; $i < 5000; $i += 2) {
            if ($this->isPrime($i)) {
                $primes[] = $i;
            }
        }

        return ($primes);
    }
}
