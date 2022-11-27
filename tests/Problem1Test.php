<?php

declare(strict_types=1);

namespace Tests\Dannyvandersluijs\ProjectEuler;

use Dannyvandersluijs\ProjectEuler\Problem001;
use PHPUnit\Framework\TestCase;

class Problem1Test extends TestCase
{
    /**
     * @covers \Dannyvandersluijs\ProjectEuler\Problem001
     */
    public function testForCorrectAnswer(): void
    {
        self::assertEquals('233168', (new Problem001())());
    }
}
