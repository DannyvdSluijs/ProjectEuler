<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler\Utils;

trait IsPrimeTrait
{
    public function isPrime(int $int): bool
    {
        if ($int === 1) {
            return false;
        }

        if ($int < 4) {
            return true;
        }

        if ($int % 2 === 0) {
            return false;
        }

        if ($int < 9) {
            return true;
        }

        if ($int % 3 === 0) {
            return false;
        }

        $r = floor(sqrt($int));
        $f = 5;
        while($f <= $r) {
            if ($int % $f === 0) {
                return false;
            }
            if ($int % ($f + 2) === 0) {
                return false;
            }
            $f += 6;
        }

        return true;
    }
}
