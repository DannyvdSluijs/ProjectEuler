<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler;

use Dannyvandersluijs\ProjectEuler\Utils\IsPrimeTrait;

class Problem010
{
    use IsPrimeTrait;

    public function __invoke(): string
    {
        $total = 0;

        for ($i = 1; $i < 2_000_000; ++$i) {
            if ($this->isPrime($i)) {
                $total += $i;
            }
        }

        return (string) $total;
    }
}
