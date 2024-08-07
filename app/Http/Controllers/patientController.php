<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Doctor;

class patientController extends Controller
{
   
    public function showPatients(){
        $patients = Patient::leftjoin('doctors', 'doctors.id' , 'patients.doctor_id')
        ->select('patients.*', 'doctors.name as doctor_name')->get();
        return view('admin.patients.show', compact('patients'));
    }
    public function addPatient(){
        $Alldoctors = Doctor::all();
        return view('admin.patients.add', compact('Alldoctors'));
    }

    public function storePatient(Request $request){
        // $name = $request->name;
        // $last_name = $request->last_name;
        $phone_number = $request->phone_number;
        $age = $request->age;
        $in_date = $request->in_date;
        $doctor_id = $request->doctor_id;


        $patient = new Patient();
        $patient->name = $request->name;
        $patient->last_name = $request->last_name;
        $patient->phone_number = $phone_number;
        $patient->age = $age;
        $patient->in_date = $in_date;
        $patient->doctor_id = $doctor_id;
        $patient->save();

        $patients = Patient::all();
        return view('admin.patients.show', compact('patients'));

    }
        
}
