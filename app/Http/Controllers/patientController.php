<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class patientController extends Controller
{
    public function showPatient(){
        
        return view('showPatient', compact('name', 'email'));
    }
}
