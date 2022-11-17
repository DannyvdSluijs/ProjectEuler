<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler;

class Problem001
{
    public function __invoke(): string
    {
        $sum = 0;
        for ($i = 1, $max = 1000; $i < $max; $i++) {
            if (($i % 3 === 0) || ($i % 5 === 0)) {
                $sum += $i;
            }
        }

        return (string) $sum;
    }
}
