<?php

declare(strict_types=1);

namespace Tests\Dannyvandersluijs\ProjectEuler;

use Dannyvandersluijs\ProjectEuler\Problem010;
use PHPUnit\Framework\TestCase;

class Problem10Test extends TestCase
{
    /**
     * @covers \Dannyvandersluijs\ProjectEuler\Problem010
     */
    public function testForCorrectAnswer(): void
    {
        self::assertEquals('142913828922', (new Problem010())());
    }
}
