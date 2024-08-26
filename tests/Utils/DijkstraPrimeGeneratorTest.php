<?php

declare(strict_types=1);

namespace Tests\Dannyvandersluijs\ProjectEuler\Utils;

use Dannyvandersluijs\ProjectEuler\Utils\DijkstraPrimeGenerator;
use PHPUnit\Framework\TestCase;

class DijkstraPrimeGeneratorTest extends TestCase
{
    public function testFirst10Primes(): void
    {
        $sut = new DijkstraPrimeGenerator();
        $primes = [];
        foreach ($sut->next() as $prime) {
            $primes[] = $prime;
            if (count($primes) === 10) {
                break;
            }
        }

        self::assertSame(
            [2, 3, 5, 7, 11, 13, 17, 19, 23, 29],
            $primes,
        );
    }

    public function testPrimesUnder100(): void
    {
        $sut = new DijkstraPrimeGenerator(limit: 100);

        self::assertSame(
            [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97],
            $sut->all(),
        );
    }

}
