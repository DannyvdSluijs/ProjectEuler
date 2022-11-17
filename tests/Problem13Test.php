<?php

declare(strict_types=1);

namespace Tests\Dannyvandersluijs\ProjectEuler;

use Dannyvandersluijs\ProjectEuler\Problem013;
use PHPUnit\Framework\TestCase;

class Problem13Test extends TestCase
{
    /**
     * @covers \Dannyvandersluijs\ProjectEuler\Problem013
     */
    public function testForCorrectAnswer(): void
    {
        self::assertEquals('5537376230', (new Problem013())());
    }
}
