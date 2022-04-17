@extends('adminlte::page')

@section('title')
Update employe |Laravel employer
@endsection

@section('content_header')
<h1>Update employe</h1>

@endsection

@section('content')
<div class="container">
@include('layouts.alert')

        <div class="row my-5">
                <div class="col-md-8 mx-auto ">
                    <div class="card my-5">
                        <div class="card-header">
                            <div class="text-center font-weight-bold text-uppercase"><h4>Update employe</h4> </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('employes.update', $employe->registration_number) }}" method="POST" class="mt-3">
                            @csrf
                            @method('PUT')
                                <div class="form-group mb-3">
                                    <label for="register_number">Registration Number</label>
                                    <input type="text" class="form-control" name="registration_number" placeholder="Registration Number" 
                                    value="{{ old('registration_number', $employe->registration_number) }}" >
                                </div>
                                <div class="form-group mb-3">
                                    <label for="fullname">FULLname</label>
                                    <input type="text" class="form-control" name="fullname" placeholder="FULLname"
                                    value="{{ old('fullname', $employe->fullname) }}" >
                                </div>
                                <div class="form-group mb-3">
                                    <label for="depart">Departement</label>
                                    <input type="text" class="form-control" name="depart" placeholder="Departement" 
                                    value="{{ old('depart', $employe->depart) }}" >
                                </div>
                                <div class="form-group mb-3">
                                    <label for="hire_date">Hire date</label>
                                    <input type="date" class="form-control" name="hire_date" placeholder="Hire date"
                                    value="{{ old('hire_date', $employe->hire_date) }}" >
                                </div>

                                <div class="form-group mb-3">
                                    <label for="phone">Phone</label>
                                    <input type="tel" class="form-control" name="phone" placeholder="Phone" 
                                    value="{{ old('phone', $employe->phone) }}" >
                                </div>
                                <div class="form-group mb-3">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" name="address" placeholder="Address" 
                                    value="{{ old('address', $employe->address) }}" >
                                </div>
                                <div class="form-group mb-3">
                                    <label for="address">City</label>
                                    <input type="text" class="form-control" name="city" placeholder="City" 
                                    value="{{ old('city', $employe->city) }}" >
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>

                            </form>
                        </div>
                    
                </div>
        </div>

</div>
@endsection

