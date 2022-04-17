@extends('adminlte::page')

@section('title')
List of employes |Laravel employer
@endsection

@section('content_header')
<h1>List of employes</h1>

@endsection

@section('content')
<div class="container">

    <div class="row my-5">
        <div class="col-md-10 mx-auto ">
        <div class="card my-5">
            <div class="card-header">
                <div class="text-center font-weight-bold text-uppercase"><h4>Employes</h4> </div>
            </div>

            <div class="card-body">
                <table id="myTable" class="table table-bordered table-stripped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>FULLNAME</th>
                            <th>DEPARTEMENT</th>
                            <th>HIRED</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employes as $key => $employe)
                        <tr>
                            <td>{{ $key+=1 }}</td>
                            <td>{{ $employe->fullname }}</td>
                            <td>{{ $employe->depart }}</td>
                            <td>{{ $employe->hire_date }}</td>
                            <td class="d-flex justify-content-center align-items-center">

                                <a href="{{ route('employes.show', $employe->registration_number) }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-eye"></i>   </a>

                                <a href="{{ route('employes.edit', $employe->registration_number) }}" class="btn btn-sm btn-warning mx-2">
                                <i class="fas fa-edit"></i>   </a>

                                <form id="{{$employe->registration_number}}" action="{{ route('employes.destroy', $employe->registration_number) }}" method="post">
                                @method('DELETE')
                                @csrf
                                </form>
                                <div class="btn btn-sm btn-danger" type="submit" onclick="deleteEmp({{ $employe->registration_number}})">
                                <i class="fas fa-trash"></i> 
                                </div>
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
@endsection

@section('js')
<script>
    $(document).ready(function(){
        
        $('#myTable').DataTable({
            dom :'Bfrtip',
            buttons : [
                'copy', 'csv', 'excel', 'pdf', 'print','colvis',
            ] 
        });
    }); 
    
    function deleteEmp(id){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
         if (result.isConfirmed) {
            document.getElementById(id).submit();
        }
        });
    }
</script>

@if(session()->has('success'))
<script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: "{{ session()->get('success') }}",
            showConfirmButton: false,
            timer: 1500
        });
</script>
@endif
@endsection