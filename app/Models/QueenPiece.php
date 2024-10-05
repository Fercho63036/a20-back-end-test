<?php

namespace App\Models;

class QueenPiece
{
    private $currentRow;
    private $currentCol;
    private $board;

    public function __construct($row, $col, Board $board)
    {
        $this->currentRow = $row;
        $this->currentCol = $col;
        $this->board      = $board;
    }

    public function calculateAttackableCells()
    {
        $directions = [
            [1, 0],  [-1, 0], [0, 1],  [0, -1],
            [1, 1],  [1, -1], [-1, 1], [-1, -1]
        ];

        $attackableCells = 0;

        foreach ($directions as $direction) {
            $attackableCells += $this->countCellsInDirection($direction[0], $direction[1]);
        }

        return $attackableCells;
    }

    private function countCellsInDirection($rowDelta, $colDelta)
    {
        $row   = $this->currentRow;
        $col   = $this->currentCol;
        $cells = 0;

        while (true) {
            $row += $rowDelta;
            $col += $colDelta;

            if ($this->board->isOutOfBounds($row, $col) || $this->board->hasObstacle($row, $col)) {
                break;
            }

            $cells++;
        }

        return $cells;
    }
}
