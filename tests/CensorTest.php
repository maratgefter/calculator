<?php

declare(strict_types=1);

use App\Censor;
use PHPUnit\Framework\TestCase;

class CensorTest extends TestCase
{
    public $calc;

    protected function setUp(): void
    {
        $this->censor = new Censor(['плохо', 'редиска']);
    }

    function testMethods()
    {
        $this->assertEquals(
            ['плохо' => 2],
            $this->censor->check('плохо плохо'),
            'wrong check'
        );
    }

    protected function tearDown(): void
    {
    }
}
