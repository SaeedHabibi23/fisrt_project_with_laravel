
@extends('layout.main')

@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">All Doctors</li>
                    </ul>
                </div>
            </div>
        </div>
   
        <div class="row">
            <div class="col-md-12 d-flex">
                <div class="card card-table flex-fill">
                    <div class="card-header">
                        <h4 class="card-title float-left mt-2">Doctors</h4>
                        <a href="addDoctor">
                        <button type="button" class="btn btn-primary float-right veiwbutton">Add Doctor</button>
                    </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-center">
                                <thead>
                                    <tr>
                                        <th>Doctor ID</th>
                                        <th>Name</th>
                                        <th class="text-center">Last Name</th>
                                        <th>Phone Number</th>
                                        <th>Address</th>
                                        <th class="text-right">Age</th>
                                        <th class="text-center">Date Employed</th>
                                        <th class="text-center">Gender</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($doctors as $doctor)
                                    <tr>
                                        <td class="text-nowrap">
                                            <div>{{$doctor->id}}</div>
                                        </td>
                                        <td class="text-nowrap">{{$doctor->name}}</td>
                                        <td class="text-nowrap">{{$doctor->last_name}}</td>
                                        <td class="text-nowrap">{{$doctor->phone_number}}</td>
                                        <td class="text-nowrap">{{$doctor->Address}}</td>
                                        <td class="text-nowrap">{{$doctor->age}}</td>
                                        <td class="text-nowrap">{{$doctor->date_employed}}</td>
                                        <td class="text-nowrap">{{$doctor->gender}}</td>
                                       
                                        <td class="text-center"> <span class="badge badge-pill bg-success inv-badge">INACTIVE</span> </td>
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

