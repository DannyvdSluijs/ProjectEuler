<?php

declare(strict_types=1);

namespace Tests\Dannyvandersluijs\ProjectEuler;

use Dannyvandersluijs\ProjectEuler\Problem009;
use PHPUnit\Framework\TestCase;

class Problem9Test extends TestCase
{
    /**
     * @covers \Dannyvandersluijs\ProjectEuler\Problem009
     */
    public function testForCorrectAnswer(): void
    {
        self::assertEquals('31875000', (new Problem009())());
    }
}
