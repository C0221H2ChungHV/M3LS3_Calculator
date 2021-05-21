<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request){
        $input = $request->screen;
        $result = eval("return $input;");
        return view('calculator', compact('result'));
    }
}
