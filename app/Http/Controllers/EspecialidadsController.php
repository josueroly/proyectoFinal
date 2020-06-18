<?php

namespace App\Http\Controllers;

use App\Especialidad;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EspecialidadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $especialidades=Especialidad::all()->where('activo', 'si');;

        return view('layouts.especialidades.tabesp', compact('especialidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Modal
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
        $this->validate($request,
            [  
            'nom_esp'=>'required|string|unique:especialidads', 
            //'activo'=>'required', 
            
            ]);
        Especialidad::create($request->all());
        Alert::success('¡Guardado!', 'Registro realizado');
        return redirect()->route('especialidades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Especialidad  $especialidad
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $listado=Especialidad::find($id);
        return  view('layouts.especialidades.detaEsp',compact('listado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Especialidad  $especialidad
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $edita=Especialidad::find($id);
        return view('layouts.especialidades.editEsp',compact('edita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Especialidad  $especialidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,
            [ 
            'nom_esp'=>'required|string|unique:especialidades', 
            //'activo' => 'required',
            ]);
 
        Especialidad::find($id)->update($request->all());
        Alert::success('Guardado', 'Edicion correcta'); 
        return redirect()->route('especialidades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Especialidad  $especialidad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Especialidad::find($id)->update(['activo' => 'no']);
        Alert::info('Eliminación correcta', 'Especialidad eliminada');
        return redirect()->route('especialidades.index');
    }
}
