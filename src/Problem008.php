<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler;

use Dannyvandersluijs\ProjectEuler\Utils\ContentReader;

class Problem008
{
    use ContentReader;

    public function __invoke(): string
    {
        $text = $this->readInput();
        $text = str_replace("\n", '', $text);
        $numberAdjacent = 13;
        $product = 0;

        for ($i = 1, $max = strlen($text) - $numberAdjacent; $i < $max; $i++) :
            $t = 1;
            for ($n = 0; $n < $numberAdjacent; $n++) {
                $t *= (int)$text[$i + $n];
            }

            $product = max($product, $t);
        endfor;

        return (string) $product;
    }
}
