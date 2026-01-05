<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatriceController extends Controller
{
    public function index()
    {
        return view('calculatriceView');
    }
    public function result(Request $request)
    {
        $number1 = $request->number1;
        $number2 = $request->number2;
        $op = $request->op;
        if ($op === "+") {
            $res = $number1 + $number2;
        } elseif ($op === '-') {
            $res = $number1 - $number2;
        }
        return redirect()->route('index')->with('res', $res)->withInput();
    }
}
