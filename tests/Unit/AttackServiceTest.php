<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\AttackService;

class AttackServiceTest extends TestCase
{
    public function testCalculateAttackableCellsSample0()
    {
        $service          = new AttackService();
        $boardSize        = 4;
        $obstaclesNumber  = 0;
        $rowQueen         = 4;
        $columnQueen      = 4;
        $obstacles        = [];

        $result = $service->calculateAttackableCells($boardSize, $obstaclesNumber, $rowQueen, $columnQueen, $obstacles);

        $this->assertEquals(9, $result);
    }

    public function testCalculateAttackableCellsSample1()
    {
        $service          = new AttackService();
        $boardSize        = 5;
        $obstaclesNumber  = 3;
        $rowQueen         = 4;
        $columnQueen      = 3;
        $obstacles        = [[5,5], [4,2], [2,3]];

        $result = $service->calculateAttackableCells($boardSize, $obstaclesNumber, $rowQueen, $columnQueen, $obstacles);

        $this->assertEquals(10, $result);
    }

    public function testCalculateAttackableCellsSample2()
    {
        $service          = new AttackService();
        $boardSize        = 1;
        $obstaclesNumber  = 0;
        $rowQueen         = 1;
        $columnQueen      = 1;
        $obstacles        = [];

        $result = $service->calculateAttackableCells($boardSize, $obstaclesNumber, $rowQueen, $columnQueen, $obstacles);

        $this->assertEquals(0, $result);
    }
}
