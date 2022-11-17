<?php

declare(strict_types=1);

namespace Tests\Dannyvandersluijs\ProjectEuler;

use Dannyvandersluijs\ProjectEuler\Problem008;
use PHPUnit\Framework\TestCase;

class Problem8Test extends TestCase
{
    /**
     * @covers \Dannyvandersluijs\ProjectEuler\Problem007
     */
    public function testForCorrectAnswer(): void
    {
        self::assertEquals('23514624000', (new Problem008())());
    }
}
