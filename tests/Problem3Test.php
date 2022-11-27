<?php

declare(strict_types=1);

namespace Tests\Dannyvandersluijs\ProjectEuler;

use Dannyvandersluijs\ProjectEuler\Problem003;
use PHPUnit\Framework\TestCase;

class Problem3Test extends TestCase
{
    /**
     * @covers \Dannyvandersluijs\ProjectEuler\Problem003
     */
    public function testForCorrectAnswer(): void
    {
        self::assertEquals('6857', (new Problem003())());
    }
}
