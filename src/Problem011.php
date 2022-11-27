<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler;

use Dannyvandersluijs\ProjectEuler\Utils\ContentReader;

class Problem011
{
    use ContentReader;

    public function __invoke(): string
    {
        $grid = $this->readInputAsGridOfNumbers();
        $size = count($grid);
        $max = 0;

        for ($x = 0; $x < $size; $x++) {
            for ($y = 0; $y < $size - 3; $y++) {

                $max = max(
                    $max,
                    // Left to right
                    $x < $size - 3 ? $grid[$x][$y] * $grid[$x + 1][$y] * $grid[$x + 2][$y] * $grid[$x + 3][$y] : 0,
                    // Top left to bottom right
                    $x < $size - 3 && $y < $size - 3 ? $grid[$x][$y] * $grid[$x + 1][$y + 1] * $grid[$x + 2][$y + 2] * $grid[$x + 3][$y + 3] : 0,
                    // Top to bottom
                    $y < $size - 3 ? $grid[$x][$y] * $grid[$x][$y + 1] * $grid[$x][$y + 2] * $grid[$x][$y + 3] : 0,
                    // Bottom left to top right
                    $x > 3 && $y < $size - 3 ? $grid[$x][$y] * $grid[$x - 1][$y + 1] * $grid[$x - 2][$y + 2] * $grid[$x - 3][$y + 3] : 0,
                );
            }
        }

        return (string) $max;
    }
}
