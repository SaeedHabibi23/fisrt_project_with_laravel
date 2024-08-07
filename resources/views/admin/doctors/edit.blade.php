@extends('layout.main')

@section('content')



<div class="page-wrapper">
    <div class="content container-fluid">
    
    <div class="page-header mt-5">
    <div class="row">
    <div class="col">
    <h3 class="page-title">Basic Inputs</h3>
    </div>
    </div>
    </div>
    
    <div class="row">
    <div class="col-lg-12">
    <div class="card">
    <div class="card-header">
    <h4 class="card-title">Basic Inputs</h4>
    </div>
    <div class="card-body">
    <form action="../updateDoctor" method="post">
        @csrf
    <input type="hidden" name="id" value="{{$doctor->id}}">
    <div class="form-group row">
    <label class="col-form-label col-md-2"> Name </label>
    <div class="col-md-10">
    <input value="{{$doctor->name}}" type="text" class="form-control"  name="name">
    </div>
    </div>
    <div class="form-group row">
    <label class="col-form-label col-md-2">Last Name</label>
    <div class="col-md-10">
    <input type="text" value="{{$doctor->last_name}}" class="form-control" name="last_name">
    </div>
    </div>
    <div class="form-group row">
    <label class="col-form-label col-md-2">Phone Number</label>
    <div class="col-md-10">
    <input type="text" value="{{$doctor->phone_number}}" class="form-control" name="phone_number">
    </div>
    </div>
    <div class="form-group row">
    <label class="col-form-label col-md-2">Address</label>
    <div class="col-md-10">
    <input type="text" value="{{$doctor->Address}}" class="form-control" name="address">
    </div>
    </div>
    <div class="form-group row">
    <label class="col-form-label col-md-2">Age</label>
    <div class="col-md-10">
    <input type="number" value="{{$doctor->age}}" class="form-control" name="age">
    </div>
    </div>
    <div class="form-group row">
    <label class="col-form-label col-md-2">Date Employed</label>
    <div class="col-md-10">
    <input type="date" value="{{$doctor->date_employed}}" class="form-control" name="date_employed">
    </div>
    </div>

    <div class="form-group row">
    <label class="col-form-label col-md-2">Gender</label>
    <div class="col-md-10">
        <label for=""> Male </label>
       <input @if($doctor->gender == 'Male') checked @endif type="radio" name="gender" value="Male">
       <label for=""> Famale </label>
       <input @if($doctor->gender == 'Famale') checked @endif  type="radio" name="gender" value="Famale">
    </div>
    </div>
    <div class="form-group row">
    <label class="col-form-label col-md-2">
     <input type="submit" value="Save" type="submit" class="btn btn-success">    
    </label>
    
    </div>
   
    </form>
    </div>
    </div>
 
    </div>
    </div>
    </div>
    </div>
@endsection    