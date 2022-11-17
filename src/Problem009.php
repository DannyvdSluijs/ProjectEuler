<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler;

use Dannyvandersluijs\ProjectEuler\Utils\IsPrimeTrait;

class Problem009
{
    public function __invoke(): string
    {
        for ($a = 1; $a < 999; $a++) {
            for ($b = 1; ($b + $a) < 999; $b++) {
                $c = 1000 - ($a + $b);
                if ($a + $b + $c === 1000) {
                    if (($a * $a) + ($b * $b) === ($c * $c)) {
                        return (string)($a * $b * $c);
                    }
                }
            }
        }

        throw new \Exception('No solution');
    }
}
