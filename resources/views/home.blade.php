@extends('adminlte::page')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@section('title')
Welcome|Laravel employer
@endsection

@section('content_header')
<h1>Dashboard</h1>

@endsection

@section('content')
<div class="container">
    <div class="row my-5">
      <div class="col-md-4 ">
        <div class="small-box bg-gradient-info">
            <div class="inner">
              <h3>{{ App\Models\Employe::count() }}</h3>
              <p>Employes</p>
            </div>
            <div class="icon">
              <i class="fas fa-users"></i>
            </div>
            <a href="{{ url('admin/employes') }}" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
      </div>

      <div class="col-md-4 ">
        <div class="small-box bg-gradient-warning">
            <div class="inner">
              <h3>{{ App\Models\Employe::count('depart') }}</h3>
              <p>Services</p>
            </div>
            <div class="icon">
            <i class="fa-solid fa-people-roof"></i>
            </div>
            <a href="{{ url('admin/employes') }}" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i> 
            </a>
        </div>
      </div>

      <div class="col-md-4 ">
        <div class="small-box bg-gradient-success">
            <div class="inner">
              <h3>{{ App\Models\Employe::count('depart') }}</h3>
              <p>Contacts</p>
            </div>
            <div class="icon">
            <i class="fa-solid fa-address-card"></i>
            </div>
            <a href="{{ url('admin/employes') }}" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
      </div>

    </div>

</div>
@endsection
