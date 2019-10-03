<?php

declare(strict_types=1);

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public $calc;

    protected function setUp(): void
    {
        $this->calc = new Calculator();
    }

    function testMethods()
    {

        $this->assertEquals(
            10,
            $this->calc->sum(2, 3, 5),
            'wrong sum'
        );

        $this->assertEquals(
            27,
            $this->calc->pow(3, 3),
            'wrong pow'
        );

        $this->assertEquals(
            27,
            $this->calc->minus(30, 3),
            'wrong minus'
        );

        $this->assertEquals(
            90,
            $this->calc->multiply(30, 3),
            'wrong multiply'
        );

        $this->assertEquals(
            10,
            $this->calc->split_up(30, 3),
            'wrong split_up'
        );

        $this->assertEquals(
            1,
            $this->calc->percent(31, 3),
            'wrong percent'
        );

        $this->assertIsInt(
            $this->calc->split_up(30, 3),
            'wrong split_up'
        );

        $this->assertTrue(
            $this->calc->equally(3, 3),
            'wrong equally'
        );

        $this->assertTrue(
            $this->calc->more(4, 3),
            'wrong more'
        );

        $this->assertTrue(
            $this->calc->less(2, 3),
            'wrong less'
        );

        $this->assertEquals(
            [5, 8, 10],
            $this->sort_up->([5, 10, 8]),
            'wrong sort_up'
        );
        
        $this->assertEquals(
            [8, 10, 5],
            $this->reverse->([5, 10, 8]),
            'wrong reverse'
        );

    }

    protected function tearDown(): void
    {
    }
}
