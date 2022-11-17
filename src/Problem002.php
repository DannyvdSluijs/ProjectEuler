<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler;

class Problem002
{
    public function __invoke()
    {
        $value1 = 1;
        $value2 = 2;

        $sum = 0;

        $sum += $this->fitsEuler($value1);
        $sum += $this->fitsEuler($value2);

        while ($value2 < 4000000) {
            $value_tmp = $value1 + $value2;
            $value1 = $value2;
            $value2 = $value_tmp;
            $sum += $this->fitsEuler($value2);
        }
        return $sum;
    }

    private function fitsEuler($int)
    {
        if ($int % 2 !== 0) {
            return 0;
        }

        return $int;
    }
}
