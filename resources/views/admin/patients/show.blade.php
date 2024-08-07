
@extends('layout.main')

@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">All Patients</li>
                    </ul>
                </div>
            </div>
        </div>
   
        <div class="row">
            <div class="col-md-12 d-flex">
                <div class="card card-table flex-fill">
                    <div class="card-header">
                        <h4 class="card-title float-left mt-2">Patients</h4>
                        <a href="addPatient">
                        <button type="button" class="btn btn-primary float-right veiwbutton">Add Patient</button>
                    </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-center">
                                <thead>
                                    <tr>
                                        <th>Patient ID</th>
                                        <th>Name</th>
                                        <th class="text-center">Last Name</th>
                                        <th>Phone Number</th>
                                        <th class="text-right">Age</th>
                                        <th class="text-center">In Date</th>
                                        <th class="text-center">Doctor Name</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($patients as $patient)
                                    <tr>
                                        <td class="text-nowrap">
                                            <div>{{$patient->id}}</div>
                                        </td>

                                        <td class="text-nowrap">{{$patient->name}}</td>
                                        <td class="text-nowrap">{{$patient->last_name}}</td>
                                        <td class="text-nowrap">{{$patient->phone_number}}</td>
                                        <td class="text-nowrap">{{$patient->age}}</td>
                                        <td class="text-nowrap">{{$patient->in_date}}</td>
                                        <td class="text-nowrap">{{$patient->doctor_name}}</td>
                                       
                                        <td class="text-center">
                                            <a href="patientEdit/{{$patient->id}}" class="btn btn-success">Edit</a>
                                            <a href="patientDelete/{{$patient->id}}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach

                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

