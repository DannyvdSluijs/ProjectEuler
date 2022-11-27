<?php

declare(strict_types=1);

namespace Tests\Dannyvandersluijs\ProjectEuler;

use Dannyvandersluijs\ProjectEuler\Problem011;
use PHPUnit\Framework\TestCase;

class Problem11Test extends TestCase
{
    /**
     * @covers \Dannyvandersluijs\ProjectEuler\Problem011
     */
    public function testForCorrectAnswer(): void
    {
        self::assertEquals('70600674', (new Problem011())());
    }
}
