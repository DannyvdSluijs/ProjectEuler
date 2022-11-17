<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler\Utils;

trait IsPalindromeTrait
{
    public function isPalindrome(string $test)
    {
        for ($i = 0, $max = floor(strlen($test) / 2); $i < $max; $i++) :
            if (substr($test, $i, 1) !== substr($test, strlen($test) - $i - 1, 1)) {
                return false;
            }
        endfor;
        return true;
    }
}
