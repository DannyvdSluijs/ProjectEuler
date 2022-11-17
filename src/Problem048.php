<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler;

class Problem048
{
    public function __invoke(): string
    {
        $total = 0;
        // Calculate the last ten digits
        for ($i = 1000; $i > 0; $i--) {
            for ($x = 0; $x < $i; $x++) {
                $product = $i ** $i;
                $total += $product % 10000000000;
            }
        }

        return (string) $total;
    }
}
