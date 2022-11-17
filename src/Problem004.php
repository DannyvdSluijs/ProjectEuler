<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler;

use Dannyvandersluijs\ProjectEuler\Utils\IsPalindromeTrait;

class Problem004
{
    use IsPalindromeTrait;

    public function __invoke(): string
    {
        $largest = 0;

        for ($a = 999; $a > 0; $a--) {
            for ($b = $a; $b > 0; $b--) {
                if ($this->isPalindrome((string)($a * $b))) {
                    if (($a * $b) > $largest) {
                        $largest = $a * $b;
                    }
                }
            }
        }
        return (string) $largest;
    }
}
