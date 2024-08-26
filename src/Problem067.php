<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler;

use Dannyvandersluijs\ProjectEuler\Utils\ContentReader;

class Problem018
{
    use ContentReader;

    public function __invoke(): string
    {
        $grid = $this->readInputAsGridOfNumbers();
        $totalLayers = count($grid);

        $queue = new \SplPriorityQueue();

        $queue->insert(['path' => [$grid[0][0]], 'pos' => 0, 'layer' => 0], 100 -$grid[0][0]);

        while ($queue->valid()) {
            $state = $queue->extract();
            $nextLayer = $state['layer'] + 1;
            $remainingLayers = $totalLayers - $nextLayer;

            if ($remainingLayers === 0) {
                return sprintf('Path: %s; Sum: %d' . PHP_EOL, implode(', ', $state['path']), (string) array_sum($state['path']));
            }
            $leftArm = array_merge($state['path'], [$grid[$nextLayer][$state['pos']]]);
            $rightArm = array_merge($state['path'], [$grid[$nextLayer][$state['pos'] + 1]]);

            $queue->insert([
                'path' => $leftArm,
                'pos' => $state['pos'],
                'layer' => $nextLayer
            ], array_sum($leftArm) / ($nextLayer + 1));
            $queue->insert([
                'path' => $rightArm,
                'pos' => $state['pos'] + 1,
                'layer' => $nextLayer
            ], array_sum($rightArm) / ($nextLayer + 1));
        }

        return '';
    }
}
