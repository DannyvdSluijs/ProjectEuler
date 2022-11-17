<?php

declare(strict_types=1);

namespace Tests\Dannyvandersluijs\ProjectEuler;

use Dannyvandersluijs\ProjectEuler\Problem005;
use PHPUnit\Framework\TestCase;

class Problem5Test extends TestCase
{
    /**
     * @covers \Dannyvandersluijs\ProjectEuler\Problem005
     */
    public function testForCorrectAnswer(): void
    {
        self::assertEquals('232792560', (new Problem005())());
    }
}
