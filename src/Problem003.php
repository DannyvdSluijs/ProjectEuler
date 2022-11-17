<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler;

use Dannyvandersluijs\ProjectEuler\Utils\IsPrimeTrait;

class Problem003
{
    use IsPrimeTrait;

    public function __invoke(): string
    {
        $int = 600851475143;
        $i = 1;
        $prime = 1;
        // Get the square root.
        $rt = floor(sqrt($int));
        if ($rt % 2 === 0) {
            $rt--;
        }

        while ($rt > 0) :
            if (bcmod((string) $int, (string)$rt) === '0') :
                if ($this->isPrime((int) $rt)) :
                    $prime = $rt;
                    $rt = -1;
                endif;
            endif;
            $rt -= 2;
        endwhile;
        return (string) $prime;
    }
}
