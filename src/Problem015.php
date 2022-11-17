<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler;

class Problem015
{
    public function __invoke(): string
    {
        $total = 0;
        for ($i = 18; $i > 0; $i--) :
            // The  number of routes is equal to the size - distance to the right *
            $thisroute = $i;
            var_dump('I is now: ' . $i);
            for ($x = (20 - $i); $x > 0; $x--) :
                $thisroute = $thisroute * $i;
            endfor;
            $total += $thisroute;
        endfor;
        $total += 40;

        return (string) $total;
    }
}
