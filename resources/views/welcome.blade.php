@extends('layouts.app')

@section('title')
Welcome|Laravel employer
@endsection

@section('content')
    <div class="row my-5">
        <div class="col-md-6 mx-auto">
            <div class="card  text-center bg-dark">
                <div class="card-header text-white">
                    <h3 class="p-2">Welcome back </h3>
                </div>
                <div class="card-body">
                    @guest
                        <a href="{{url('/login')}}" class="btn btn-outline-light" style="border-radius:15px">
                        Login
                        </a>
         
                    @endguest

                    @auth
                        <a href="{{url('admin/home')}}" class="btn btn-outline-light">
                        Home
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>

  

</div>
@endsection