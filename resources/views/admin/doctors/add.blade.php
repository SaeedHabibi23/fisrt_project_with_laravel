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
    <form action="storeDoctor" method="post">
        @csrf
    <div class="form-group row">
    <label class="col-form-label col-md-2"> Name </label>
    <div class="col-md-10">
    <input type="text" class="form-control"  name="name">
    </div>
    </div>
    <div class="form-group row">
    <label class="col-form-label col-md-2">Last Name</label>
    <div class="col-md-10">
    <input type="text" class="form-control" name="last_name">
    </div>
    </div>
    <div class="form-group row">
    <label class="col-form-label col-md-2">Phone Number</label>
    <div class="col-md-10">
    <input type="text" class="form-control" name="phone_number">
    </div>
    </div>
    <div class="form-group row">
    <label class="col-form-label col-md-2">Address</label>
    <div class="col-md-10">
    <input type="text" class="form-control" name="address">
    </div>
    </div>
    <div class="form-group row">
    <label class="col-form-label col-md-2">Age</label>
    <div class="col-md-10">
    <input type="number" class="form-control" name="age">
    </div>
    </div>
    <div class="form-group row">
    <label class="col-form-label col-md-2">Date Employed</label>
    <div class="col-md-10">
    <input type="date" class="form-control" name="date_employed">
    </div>
    </div>

    <div class="form-group row">
    <label class="col-form-label col-md-2">Gender</label>
    <div class="col-md-10">
        <label for=""> Male </label>
       <input type="radio" name="gender" value="Male">
       <label for=""> Famale </label>
       <input type="radio" name="gender" value="Famale">
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