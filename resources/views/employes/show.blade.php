@extends('adminlte::page')

@section('title')
Add new employe |Laravel employer
@endsection

@section('content_header')
<h1>Show employe</h1>

@endsection

@section('content')
<div class="container">
@include('layouts.alert')

    <div class="row my-5">
            <div class="col-md-8 mx-auto ">
                <div class="card my-5">
                        <div class="card-header">
                            <div class="text-center font-weight-bold text-uppercase">
                                <h3>{{ $employe->fullname }}</h3> 
                            </div>
                        </div>
                        <div class="mt-2 text-center font-weight-bold text-uppercase">
                                <a href="{{ route('vacation.request',$employe->registration_number) }}" class="btn btn-outline-dark">
                                    Vacation Request
                                </a>
                                <a href="{{ route('certificate.request',$employe->registration_number) }}" class="btn btn-outline-danger">
                                    Work Certificate
                                </a>
                        </div>
                        <div class="card-body">
                        
                                <div class="form-group mb-3">
                                    <label for="register_number">Registration Number</label>
                                    <input type="text" class="form-control rounded-0" name="registration_number" disabled  placeholder="Registration Number"
                                    maxlength="8" value="{{ $employe->registration_number }}" >
                                </div>
                                <div class="form-group mb-3">
                                    <label for="fullname">FULLname</label>
                                    <input type="text" class="form-control rounded-0" name="fullname" disabled placeholder="FULLname" 
                                    value="{{ $employe->fullname }}" >
                                </div>
                                <div class="form-group mb-3">
                                    <label for="depart">Departement</label>
                                    <input type="text" class="form-control rounded-0" name="depart" disabled placeholder="Departement" 
                                    value="{{ $employe->depart }}" >
                                </div>
                                <div class="form-group mb-3">
                                    <label for="hire_date">Hire date</label>
                                    <input type="date" class="form-control rounded-0" name="hire_date" disabled placeholder="Hire date" 
                                    value="{{ $employe->hire_date }}" >
                                </div>

                                <div class="form-group mb-3">
                                    <label for="phone">Phone</label>
                                    <input type="tel" class="form-control rounded-0" name="phone" disabled placeholder="Phone" 
                                    value="{{ $employe->phone }}" >
                                </div>
                                <div class="form-group mb-3">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control rounded-0" name="address" disabled placeholder="Address" 
                                    value="{{ $employe->address }}" >
                                </div>
                                <div class="form-group mb-3">
                                    <label for="address">City</label>
                                    <input type="text" class="form-control rounded-0" name="city" disabled placeholder="City"
                                    value="{{ $employe->city }}" >
                                </div>
                        
                        </div>
            
            </div>
    </div>

</div>
@endsection

