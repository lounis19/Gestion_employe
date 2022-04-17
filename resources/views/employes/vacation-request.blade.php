@extends('adminlte::page')

@section('title')
    Vacation Request
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            
            <div class="card p-3 my-5">
                <div class="card-header">
                    <h3>
                        Vacation Request
                    </h3>
                </div>
                <div class="card-body">
                    <p class="lead">
                        <b>{{ $employe->fullname }}</b> is presentely employed with me in the following:
                    </p>
                    <p class="lead">
                        <b>{{ $employe->depart }}</b> departement.
                    </p>
                    <p class="lead">
                        He is requesting a vacation starting from <b>______________</b>
                    </p>
                    <p class="lead">
                        And ends on <b>______________</b>
                    </p>
                    <p class="m-5">
                        ____________
                        ____________
                    </p>

                </div>
                <div class="my-4">
                    <a href="#"  type="button"
                        onclick="
                        document.getElementById('printLink').style.display='none';
                        window.print();" 
                        class="btn btn-sm btn-primary"  id="printLink">
                        <i class="fas fa-print"></i>
                    </a>  
                </div>  
                
            </div> 
            <div style="float:right">
                <a href="{{ url('admin/employes', $employe->registration_number) }}" class="btn btn-dark">Close</a>  
            </div>   
        </div>
    </div>
</div>
@endsection