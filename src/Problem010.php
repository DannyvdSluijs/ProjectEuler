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
        for ($i = 3; $i < 2000000; $i += 2) :
            if ($this->isPrime($i)) :
                $total += $i;
            endif;
        endfor;

        return (string) $total;
    }
}
