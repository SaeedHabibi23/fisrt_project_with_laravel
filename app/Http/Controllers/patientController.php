<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Room;

class patientController extends Controller
{
   
    public function showPatients(){
        $patients = Patient::leftjoin('doctors', 'doctors.id' , 'patients.doctor_id')
        ->leftjoin('rooms' , 'rooms.id', 'patients.room_id')
        ->select('patients.*', 'doctors.name as doctor_name' , 'rooms.number as room_number')->get();
        return view('admin.patients.show', compact('patients'));
    }
    public function addPatient(){
        $Alldoctors = Doctor::all();
        $Rooms = Room::all();
        return view('admin.patients.add', compact('Alldoctors' , 'Rooms'));
    }

    public function storePatient(Request $request){
        // $name = $request->name;
        // $last_name = $request->last_name;
        $phone_number = $request->phone_number;
        $age = $request->age;
        $in_date = $request->in_date;
        $doctor_id = $request->doctor_id;
        $room_id = $request->room_id;


        $patient = new Patient();
        $patient->name = $request->name;
        $patient->last_name = $request->last_name;
        $patient->phone_number = $phone_number;
        $patient->age = $age;
        $patient->in_date = $in_date;
        $patient->doctor_id = $doctor_id;
        $patient->room_id = $room_id;
        $patient->save();

        return redirect()->route('showPatients');

    }

    public function patientEdit($id){
        $patient = Patient::find($id);
        $Alldoctors = Doctor::all();
        $Rooms = Room::all();
        return view('admin.patients.edit', compact('Alldoctors' , 'Rooms' , 'patient'));
    }
        
}
