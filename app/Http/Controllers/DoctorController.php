<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function show(){
        return view('admin.doctors.show');
    }
  
    public function add(){
        return view('addDoctor');
    }
    public function welcome(){
        $categories = [
            [
                'Title' => 'It Development', 
                'Description' => 'Lorem ipsum dolor sit amet, consectetur' , 
                'Link' => 'Show More'
            ],
            [
                'Title' => 'Web Development', 
                'Description' => 'Lorem ipsum dolor sit amet, consectetur' , 
                'Link' => 'Show More'
            ],
            [
                'Title' => 'Mobile Development', 
                'Description' => 'Lorem ipsum dolor sit amet, consectetur' , 
                'Link' => 'Show More'
            ],
        ];
        return view('welcome', compact('categories'));
    }
        
}
