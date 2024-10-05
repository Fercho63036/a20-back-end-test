<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AttackService;

class AttackController extends Controller
{
    protected $attackService;

    public function __construct(AttackService $attackService)
    {
        $this->attackService = $attackService;
    }

    public function getQueenAttackableSquares(Request $request)
    {
        $data = $request->validate([
            'boardSize'       => 'required|integer|min:1|max:100000',
            'obstaclesNumber' => 'required|integer|min:0|max:100000',
            'rowQueen'        => 'required|integer|min:1|max:100000',
            'columnQueen'     => 'required|integer|min:1|max:100000',
            'obstacles'       => 'array'
        ]);

        $boardDimension = $data['boardSize'];
        $numObstacles   = $data['obstaclesNumber'];
        $queenRow       = $data['rowQueen'];
        $queenCol       = $data['columnQueen'];
        $obstacleList   = $data['obstacles'];

        $result = $this->attackService->calculateAttackableCells($boardDimension, $numObstacles, $queenRow, $queenCol, $obstacleList);

        return response()->json(['data' => $result]);
    }
}
