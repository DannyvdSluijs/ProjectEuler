<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler;

class Problem021
{
    public function __invoke(): string
    {
        $total = 0;
        $skip = array();

        for ($i = 1; $i < 10000; $i++) :
            if (!in_array($i, $skip)) :
                if (10000  % $i == 0) :
                    $total += $i;
                    $total += 10000 / $i;
                    $skip[] = $i;
                    $skip[] = 10000 / $i;
                endif;
            endif;
        endfor;
        return (string) $total;
    }
}
