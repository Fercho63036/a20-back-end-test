<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttackController;
use App\Http\Controllers\ValueController;

Route::post('/problem-1', [AttackController::class, 'getQueenAttackableSquares']);
Route::post('/problem-2', [ValueController::class, 'getMaximunValueFunction']);
