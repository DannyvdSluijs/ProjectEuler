<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler;

class Problem014
{
    public function __invoke(): string
    {
        $out = 0;

        for ($i = 1000000; $i > 0; $i--) {
            $tmp = $this->calcChain($i);
            if ($tmp > $out) {
                $out = $tmp;
            }
        }
        return (string) $out;
    }

    public function calcChain($int)
    {
        $chainsize = 1;

        while ($int > 1) {
            $int = $this->nextInChain($int);
            $chainsize++;
        }
        return $chainsize;
    }

    public function nextInChain($int)
    {
        if ($int % 2 == 0) {
            return ($int / 2);
        } else {
            return (3 * $int + 1);
        }
    }
}
