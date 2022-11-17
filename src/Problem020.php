<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler;

use Dannyvandersluijs\ProjectEuler\Utils\ContentReader;

class Problem020
{
    use ContentReader;

    public function __invoke(): string
    {
        // Input contains 100!
        $input = $this->readInput();

        $digits = str_split($input);
        return (string) array_sum($digits);
    }
}
