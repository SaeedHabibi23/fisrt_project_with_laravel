<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculate extends Controller
{
    public function show(){
        $a = 10;
        $b = 30;

        $sum = $a + $b;
        return view('calculate', compact('sum'));
    }
}
