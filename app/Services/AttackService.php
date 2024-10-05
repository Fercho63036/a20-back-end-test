<?php

namespace App\Services;

use App\Models\Board;
use App\Models\QueenPiece;

class AttackService
{
    public function calculateAttackableCells($boardSize, $numObstacles, $queenRow, $queenCol, $obstacleList)
    {
        $board = new Board($boardSize);

        foreach ($obstacleList as $obstacle) {
            $board->addObstacle($obstacle[0], $obstacle[1]);
        }

        $queen = new QueenPiece($queenRow, $queenCol, $board);

        return $queen->calculateAttackableCells();
    }
}
