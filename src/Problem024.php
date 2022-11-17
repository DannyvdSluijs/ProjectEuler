<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler;

class Problem024
{
    public function __invoke(): string
    {
        $flat = [];
        $permutations = $this->lexicographicPermutations(range(0, 9));
        array_walk_recursive($permutations, static function(string $item) use (&$flat): void {
            $flat[] = $item;
        });

        return $flat[1_000_000];
    }

    private function lexicographicPermutations(array $items, array $stack = []): array
    {
        if (empty($items)) {
            return [implode($stack)];
        }

        $results = [];
        foreach ($items as $key => $value) {
            $itemsCopy = $items;
            unset($itemsCopy[$key]);
            $results[] = $this->lexicographicPermutations($itemsCopy, array_merge($stack, [$value]));
        }

        return $results;
    }
}
