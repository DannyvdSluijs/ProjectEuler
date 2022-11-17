<?php

declare(strict_types=1);

namespace Tests\Dannyvandersluijs\ProjectEuler;

use Dannyvandersluijs\ProjectEuler\Problem012;
use PHPUnit\Framework\TestCase;

class Problem12Test extends TestCase
{
    /**
     * @covers \Dannyvandersluijs\ProjectEuler\Problem012
     */
    public function testForCorrectAnswer(): void
    {
        self::assertEquals('76576500', (new Problem012())());
    }
}
