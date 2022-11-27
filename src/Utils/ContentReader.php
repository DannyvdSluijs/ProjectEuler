<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler\Utils;

trait ContentReader
{
    protected function readFile(string $fileName): string
    {
        $content = file_get_contents($fileName);

        return trim($content);
    }

    protected function readInputForProblem(int $day): string
    {
        return $this->readFile(__DIR__ . "/../../inputs/problem{$day}.txt");
    }

    protected function readInput(): string
    {
        // Derive the day from the class name (using late static binding)
        return $this->readInputForProblem((int) substr(static::class, -3));
    }

    protected function readInputAsNumber(): int
    {
        // Derive the day from the class name (using late static binding)
        return (int) $this->readInput();
    }

    /** @return array<int, string> */
    protected function readInputAsLines(): array
    {
        $content = $this->readInput((int) substr(static::class, -2));
        return explode("\n", $content);
    }

    /** @return array<int, int> */
    public function readInputAsLinesOfIntegers(): array
    {
        return array_map(intval(...), $this->readInputAsLines());
    }

    /** @return array<int, int> */
    public function readInputAsGridOfCharacters(): array
    {
        return array_map(str_split(...), $this->readInputAsLines());
    }

    /** @return array<int, int> */
    public function readInputAsGridOfNumbers(): array
    {
        $lines = $this->readInputAsLines();
        return array_map(static fn($line) => array_map(intval(...), explode(' ', $line)), $lines);
    }
}
