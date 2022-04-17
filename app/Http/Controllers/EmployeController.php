<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;

class EmployeController extends Controller
{
    public function index(){

        $employes=Employe::all();

        return view('employes/index', compact('employes', $employes));
    }

    public function create(){
        
        return view('employes/create');
    }
    public function show($id){
        $employe=Employe::where('registration_number', $id)->first();
        
        return view ('employes.show', compact('employe', $employe));
    }

    public function store(Request $request){
        $this->validate($request,[
'registration_number' => 'required|numeric|unique:employes,registration_number',
'fullname' => 'required',
'depart' => 'required',
'hire_date' => 'required',
'address' => 'required',
'city' => 'required',
'phone' => 'required',

        ]);
        Employe::create($request->except('_token'));
        return \redirect()->route('employes.index')->with(['success' => 'Employe added successfully'
    ]);
    
    }
    public function edit($id){
        $employe=Employe::where('registration_number', $id)->first();
        
        return view ('employes.edit', compact('employe', $employe));
    }
    public function update(Request $request, $id){

        $employe=Employe::where('registration_number', $id)->first();

        $this->validate($request,[
            'registration_number' => 'required|numeric|unique:employes,id,'.$employe->registration_number,
            'fullname' => 'required',
            'depart' => 'required',
            'hire_date' => 'required',
            'address' => 'required',
            'city' => 'required',
            'phone' => 'required',
            
                    ]);
                    $employe->update($request->except('_token','_method'));
                    return \redirect()->route('employes.index')->with(['success' => 'Employe update successfully'
                ]);
    }

public function destroy($id){
    $employe=Employe::where('registration_number', $id)->first();

    $employe->delete();

    return \redirect()->route('employes.index')->with(['success' => 'Employe deleted successfully']);
}

public function vacationRequest($id){
    $employe=Employe::where('registration_number', $id)->first();
    return view('employes.vacation-request')->with(['employe'=> $employe]);
}
public function certificateRequest($id){
    $employe=Employe::where('registration_number', $id)->first();
    return view('employes.certificate-request')->with(['employe'=> $employe]);
}


}
