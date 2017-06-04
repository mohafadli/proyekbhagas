<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use Illuminate\Http\Request;
use App\Patient;

class PatientController extends Controller
{
    public function index(){
        $patients = Patient::all();

        //DB::table('petitions')->get()
        //return $petitions;
        return view('patient.index', compact('patients'));
    }

    public function show($id){
        $patient = Patient::find($id);

        //Petition::where('id',$id)->get(); -> mengembalikan array
        //Petition::where('id',$id)->first(); -> mengembalikan data spesifik
        //return $petitions;
        //return $petitions->when();
        return view('patient.show', compact('patient'));
    }

    public function create(){
        return view('patient.create');
    }

    public function store(PatientRequest $request){
        $input = $request->input();

        $patient = New Patient($input);

        Auth::user()->patients()->save($patient);

        return redirect(url('patients'));
    }

    public function edit($id){
        $patient = Patient::find($id);
        return view('patient.edit', compact('patient'));
    }

    public function update(PatientRequest $request, $id){
        $patient = Patient::find($id);

        $input = $request->input();

        $patient->update($input);

        return redirect(url('patients/'.$id));
    }

    public function destroy($id){
        $patient = Patient::find($id);

        $patient->delete();

        return redirect(url('patients'));
    }

    public function __construct(){
        $this->middleware('auth');
    }
}