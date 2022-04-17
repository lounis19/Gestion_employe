@extends('adminlte::page')

@section('title')
Add new employe |Laravel employer
@endsection

@section('content_header')
<h1>Add new employe</h1>

@endsection

@section('content')
<div class="container">
    <!--@include('layouts.alert')-->

    <div class="row my-5">
        <div class="col-md-8 mx-auto ">
            <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase"><h4>Add new employe</h4> </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('employes.store') }}" method="POST" class="mt-3">
                        @csrf
                            <div class="form-group mb-3">
                                <label for="register_number">Registration Number</label>
                                <input type="text" class="form-control @error('registration_number') is-invalid @enderror" name="registration_number" placeholder="Registration Number"
                                maxlength="8" value="{{ old('registration_number') }}" >
                                                            @error('registration_number')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="fullname">FULLname</label>
                                <input type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" placeholder="FULLname" value="{{ old('fullname') }}" >
                                                            @error('fullname')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="depart">Departement</label>
                                <input type="text" class="form-control @error('depart') is-invalid @enderror" name="depart" placeholder="Departement" value="{{ old('depart') }}" >
                                                            @error('depart')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="hire_date">Hire date</label>
                                <input type="date" class="form-control @error('hire_date') is-invalid @enderror" name="hire_date" placeholder="Hire date" value="{{ old('hire_date') }}" >
                                                            @error('hire_date')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Phone" value="{{ old('phone') }}" >
                                                            @error('phone')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="address">Address</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Address" value="{{ old('address') }}" >
                                                            @error('address')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="address">City</label>
                                <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" placeholder="City" value="{{ old('city') }}" >
                                                            @error('city')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
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

