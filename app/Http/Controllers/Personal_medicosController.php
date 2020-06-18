<?php

namespace App\Http\Controllers;

use App\Personal_medico;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class Personal_medicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medicos=Personal_medico::all()->where('activo', 'si');
        return view('layouts.personalMedico.tabPm', compact('medicos'));
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
        $this->validate($request,
            [ 
            'nom_pm'=>'required|string',
            'app_pm'=>'required|string',
            'apm_pm'=>'string',
            'car_pm'=>'required|string',
            'exp_pm'=>'required|integer',
            'tur_pm'=>'required|string',
            'tel_pm'=>'required|string', 
            'dir_pm'=>'required|string',
            'sex_pm'=>'required|string',
            'telRef_pm'=>'required|string',
            'fecNac_pm'=>'required',
            'especialidad_id'=>'required',
            
            ]);
        Personal_medico::create($request->all());
        Alert::success('¡Guardado!', 'Personal Médico registrado');
        return redirect()->route('medicos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personal_medico  $personal_medico
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $detalles=Personal_medico::find($id);
        return view('layouts.personalMedico.detaPm', compact('detalles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personal_medico  $personal_medico
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $editar=Personal_medico::find($id);
        return view('layouts.personalMedico.editPm', compact('editar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personal_medico  $personal_medico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [  
            'nom_pm'=>'required|string',
            'app_pm'=>'required|string',
            'apm_pm'=>'string',
            'car_pm'=>'required|string',
            'exp_pm'=>'required|integer',
            'tur_pm'=>'required|string',
            'tel_pm'=>'required|string', 
            'dir_pm'=>'required|string',
            'sex_pm'=>'required|string',
            'telRef_pm'=>'required|string',
            'fecNac_pm'=>'required',

        ]);
        Personal_medico::find($id)->update($request->all());
        Alert::success('Guardado', 'Edición correcta');
        return redirect()->route('medicos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personal_medico  $personal_medico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('personal_medicos')->where('id', $id)->update(['activo' => 'no']);
        Alert::success('Personal Médico eliminado', 'Eliminación correcta');
        return redirect()->route('medicos.index');
    }
}
