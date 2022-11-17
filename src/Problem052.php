<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler;

class Problem052
{
    public function __invoke(): string
    {
        $i = 1;
        while (1) :
            if ($this->check($i)) :
                var_dump($i);
                exit();
            endif;
            $i++;
        endwhile;
    }

    private function check($x)
    {
        if (substr($x, 0, 1) != 1) {
            return false;
        }

        $x2 = 2 * $x;
        $x3 = 3 * $x;
        $x4 = 4 * $x;
        $x5 = 5 * $x;
        $x6 = 6 * $x;

        if (!$this->comp($x, $x2)) {
            return false;
        }
        if (!$this->comp($x, $x3)) {
            return false;
        }
        if (!$this->comp($x, $x4)) {
            return false;
        }
        if (!$this->comp($x, $x5)) {
            return false;
        }
        if (!$this->comp($x, $x6)) {
            return false;
        }

        return true;
    }

    private function comp($a, $b)
    {
        $arra = str_split($a);
        $arrb = str_split($b);
        sort($arra);
        sort($arrb);
        $a = implode($arra);
        $b = implode($arrb);

        return ($a == $b);
    }
}
