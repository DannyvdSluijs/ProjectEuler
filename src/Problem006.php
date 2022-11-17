<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler;

class Problem006
{
    public function __invoke(): string
    {
        $sumsqu = 0;
        $cheat = 0;
        for ($i = 1; $i < 101; $i++) {
            $sumsqu += $i * $i;
            $cheat += $i;
        }

        $squsum = $cheat * $cheat;

        $diff = $squsum - $sumsqu;

        return (string) $diff;
    }
}
