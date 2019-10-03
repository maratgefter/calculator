<?php

declare(strict_types=1);

use App\Calculator;
use PHPUnit\Framework\TestCase;

class VovaTest extends TestCase
{
    public $calc;

    protected function setUp(): void
    {
        $this->calc = new Calculator();
    }

    function testMethods()
    {
        $this->assertEquals(
            [1, 3, 3],
            $this->calc->add_one([1, 2, 3]),
            'wrong add_one'
        ); 

        $this->assertEquals(
            [1, 6, 3],
            $this->calc->add_one([1, 5, 3]),
            'wrong add_one'
        ); 

        $this->assertEquals(
            [0, 1, 0],
            $this->calc->add_one([0, 0, 0]),
            'wrong add_one'
        );

        $this->assertEquals(
            [1, 2, 1],
            $this->calc->add_one([1, 1, 1]),
            'wrong add_one'
        );

        $this->assertEquals(
            [3, 4, 3],
            $this->calc->add_one([3, 3, 3]),
            'wrong add_one'
        );
    }

    protected function tearDown(): void
    {
    }
}
