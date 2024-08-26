<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler\Utils;

class DijkstraPrimeGenerator
{
    private int $current = 2;
    
    private array $primes = [];
    private array $pool = [];

    public function __construct(
        private readonly int|null $limit = null,
    ) {}

    public function next(): \Generator
    {
        if ($this->current === 2) {
            $this->primes[] = $this->current;
            $this->pool[] = ['prime' => $this->current, 'multiple' => $this->current**2];
            yield $this->current;
        }

        while (true) {
            $this->current++;
            if (!\is_null($this->limit) && $this->current === $this->limit) {
                return;
            }

            $smallestMultipleFromPool = min(array_column($this->pool, 'multiple'));
            if ($this->current < $smallestMultipleFromPool) {
                $this->primes[] = $this->current;
                $this->pool[] = ['prime' => $this->current, 'multiple' => $this->current ** 2];
                yield $this->current;
            } else {
                $matches = array_filter($this->pool, fn($item) => $item['multiple'] === $smallestMultipleFromPool);
                foreach ($matches as $key => $item) {
                    if ($item['multiple'] === $smallestMultipleFromPool) {
                        $this->pool[$key]['multiple'] += $item['prime'];
                    }
                }
            }
        }
    }

    public function all(): array
    {
        if  (\is_null($this->limit)) {
            throw new \RuntimeException('Cannot call all() when limit is <null>');
        }

        foreach ($this->next() as $_) {}

        return $this->primes;
    }
}
