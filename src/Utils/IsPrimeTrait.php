<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler\Utils;

trait IsPrimeTrait
{
    public function isPrime(int $int): bool
    {
        if (in_array($int, [2, 3, 5, 7, 11, 13, 17, 19])) {
            return true;
        }

        // Even numbers and numbers ending on 5 or 0 can't be prime
        if (in_array(substr((string) $int, -1), [0, 2, 4, 5, 6, 8], true)) {
            return false;
        }

        $rt = floor(sqrt($int));
        for ($i = 2; $i <= $rt; $i++) :
            if (bcmod((string)$int, (string)$i) === '0') {
                return false;
            }
        endfor;
        return true;
    }
}
