<?php

declare(strict_types=1);

namespace Tests\Dannyvandersluijs\ProjectEuler;

use Dannyvandersluijs\ProjectEuler\Problem006;
use PHPUnit\Framework\TestCase;

class Problem6Test extends TestCase
{
    /**
     * @covers \Dannyvandersluijs\ProjectEuler\Problem006
     */
    public function testForCorrectAnswer(): void
    {
        self::assertEquals('25164150', (new Problem006())());
    }
}
