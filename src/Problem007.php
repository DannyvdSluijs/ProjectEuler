<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler;

use Dannyvandersluijs\ProjectEuler\Utils\IsPrimeTrait;

class Problem007
{
    use IsPrimeTrait;

    public function __invoke(): string
    {
        $primes = 0;
        $i = 1;

        while (1) :
            if ($this->isPrime($i)) {
                $primes++;
            }
            if ($primes === 10001) :
                return (string) $i;
            endif;
            $i += 2;
        endwhile;
    }
}
