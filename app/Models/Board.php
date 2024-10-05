<?php

namespace App\Models;

class Board
{
    private $size;
    private $obstacleMap;

    public function __construct($size)
    {
        $this->size        = $size;
        $this->obstacleMap = [];
    }

    public function addObstacle($row, $col)
    {
        $this->obstacleMap[$row][$col] = true;
    }

    public function hasObstacle($row, $col)
    {
        return isset($this->obstacleMap[$row][$col]);
    }

    public function isOutOfBounds($row, $col)
    {
        return $row < 1 || $row > $this->size || $col < 1 || $col > $this->size;
    }
}
