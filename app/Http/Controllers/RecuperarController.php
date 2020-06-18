<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Especialidad;
use App\Paciente;
use App\Personal_medico;

class RecuperarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $especialidades=Especialidad::all()->where('activo', 'no');;
        return view('layouts.recuperar.recEsp', compact('especialidades'));
    }

    public function pacientes()
    {
        $pacientes=Paciente::all()->where('activo', 'no');
        return view('layouts.recuperar.recPac',compact('pacientes'));
    }

    //
    public function medicos()
    {
        $medicos=Personal_medico::all()->where('activo', 'no');
        return view('layouts.recuperar.recPm',compact('medicos'));
    }

    public function restPaciente($id)
    {
        //
        Paciente::find($id)->update(['activo' => 'si']);
        Alert::success('Se ha restablecido', 'Recuperaste este paciente');
        return redirect()->route('pacientes.index');
    }

    //
    public function restMedico($id)
    {
        //
        Personal_medico::find($id)->update(['activo' => 'si']);
        Alert::success('Se ha restablecido', 'Recuperaste este personal médico');
        return redirect()->route('medicos.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Especialidad::find($id)->update(['activo' => 'si']);
        Alert::success('Se ha restablecido', 'Recuperaste esta especialidad');
        return redirect()->route('especialidades.index');
    }
}
