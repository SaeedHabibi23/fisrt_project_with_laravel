<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function show(){
        return view('aboutUs');
    }
  
    public function add(){
        return view('addDoctor');
    }
        
}
