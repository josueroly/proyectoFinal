<?php

namespace App\Http\Controllers;

use App\Especialidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class EspecialidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especialidades=Especialidade::all()->where('activo', 'si');;
        return view('layouts.contents.tabesp', compact('especialidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('layouts.contents.formesp');

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
            'cod_esp'=>'required|unique:especialidades', 
            'nom_esp'=>'required|string|unique:especialidades', 
            //'activo'=>'required', 
            
            ]);
        Especialidade::create($request->all());
        if ($this){
        Alert::success('¡Guardado!', 'Registro realizado');
        return redirect()->route('especialidad.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Especialidade  $especialidade
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $lista=Especialidade::find($id);
        return  view('layouts.contents.detaEsp',compact('lista'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Especialidade  $especialidade
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $edita=Especialidade::find($id);
        return view('layouts.contents.editEsp',compact('edita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Especialidade  $especialidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,
            [ 
            'cod_esp'=>'required|integer|unique:especialidades', 
            'nom_esp'=>'required|string|unique:especialidades', 
            //'activo' => 'required',
            ]);
 
        Especialidade::find($id)->update($request->all());
        Alert::success('Guardado', 'Edicion correcta');
        return redirect()->route('especialidades.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Especialidade  $especialidade
     * @return \Illuminate\Http\Response
     */
    public function logicDelete($id)
    {
        $eliminar=Especialidade::find($id);
        return view('layouts.contents.tabesp',compact('eliminar'));
    }
     

    public function destroy($id)
    {
        //
        
        //DB::table('especialidades')->where('id', $id)->update(['activo' => 'no']);
        //return redirect()->route('especialidad.index');
        Especialidade::find($id)->update(['activo' => 'no']);
        return redirect()->route('especialidad.index');
    }
}
