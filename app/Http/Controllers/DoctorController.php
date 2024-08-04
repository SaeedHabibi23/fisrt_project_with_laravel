<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    public function show(){
        $doctors = Doctor::all();
        return view('admin.doctors.show', compact('doctors'));
    }
  
    public function addDoctor(){
        return view('admin.doctors.add');
    }

    public function storeDoctor(Request $request){
        $name = $request->name;
        $last_name = $request->last_name;
        $phone_number = $request->phone_number;
        $address = $request->address;
        $age = $request->age;
        $date_employed = $request->date_employed;
        $gender = $request->gender;
  
        $doctor = new Doctor();
        $doctor->date_employed	 = $date_employed;
        $doctor->name = $name;
        $doctor->last_name = $last_name;
        $doctor->phone_number = $phone_number;
        $doctor->Address = $address;
        $doctor->age = $age;
        $doctor->gender = $gender;
        $doctor->save();

        $doctors = Doctor::all();
        return view('admin.doctors.show', compact('doctors'));

    }

    public function doctorDelete($id){
        $doctor = Doctor::find($id);
        $doctor->delete();
        $doctors = Doctor::all();
        return view('admin.doctors.show', compact('doctors'));
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
