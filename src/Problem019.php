<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler;

class Problem019
{
    public function __invoke(): string
    {
        $total = 0;

        for ($year = 1901; $year <= 2000; $year++) :
            for ($month = 1; $month <= 12; $month++) :
                $date = new \DateTime("$year-$month-1");
                if ($date->format('N') === '7') {
                    $total++;
                }
            endfor;
        endfor;

        return (string) $total;
    }
}
