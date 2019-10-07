<?php

declare(strict_types=1);

use App\Tic_Tac_Toe;
use PHPUnit\Framework\TestCase;

class Tic_Tac_ToeTest extends TestCase
{
    public $tic_tac_toe;

    protected function setUp(): void
    {
        $this->$tic_tac_toe = new Tic_Tac_Toe(3);
    }

    function testMethods()
    {
        $this->assertEquals(
            3,
            $this->calc->create_array(3),
            'wrong sum'
        );
    }

    protected function tearDown(): void
    {
    }
}
