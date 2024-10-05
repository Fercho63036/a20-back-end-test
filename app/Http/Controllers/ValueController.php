<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ValueService;

class ValueController extends Controller
{
    protected $valueService;

    public function __construct(ValueService $valueService)
    {
        $this->valueService = $valueService;
    }

    public function getMaximunValueFunction(Request $request)
    {
        $data = $request->validate([
            'input' => 'required|string|min:1|max:100000|regex:/^[a-z]+$/'
        ]);

        $inputString = $data['input'];
        $maxValue    = $this->valueService->computeMaximumValue($inputString);

        return response()->json(['data' => $maxValue]);
    }
}
