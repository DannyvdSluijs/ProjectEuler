<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler;

class Problem014
{
    public function __invoke(): string
    {
        $range = range(0, 1000000);

        unset($range[0]);
        $max = 0;
        $maxStartingNumber = 0;

        foreach (array_reverse(array_keys($range)) as $key) {
            if (!array_key_exists($key, $range)) {
                continue;
            }
            $value = $range[$key];

            // Get Collatz sequence
            $sequence = $this->collatz($value);
            $sequenceCount = count($sequence);
            if ($sequenceCount > $max) {
                $max = $sequenceCount;
                $maxStartingNumber = $value;
            }

            // Unset all keys after first
            array_shift($sequence);
            foreach ($sequence as $item) {
                unset($range[$item]);
            }
        }

        return (string) $maxStartingNumber;
    }

    private function collatz(int $int)
    {
        $result = [$int];
        while ($int !== 1) {
            $int % 2 === 0 ? $int /= 2 : $int = $int * 3 + 1;
            $result[] = $int;
        }

        return $result;
    }
}
