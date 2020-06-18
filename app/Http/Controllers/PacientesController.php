<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pacientes=Paciente::all()->where('activo', 'si');
        return view('layouts.pacientes.tabPac', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //MODAL
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
            'ci_pac'=>'required|unique:pacientes',  
            'nom_pac'=>'required|string',
            'app_pac'=>'required|string',
            'apm_pac'=>'string',
            'tel_pac'=>'required|string', 
            'dir_pac'=>'required|string',
            'telRef_pac'=>'required|string',
            'sex_pac'=>'required|string',
            'estCiv_pac'=>'required|string',
            'pro_pac'=>'required|string',
            'fecNac'=>'required',
            ]);
        Paciente::create($request->all());
        Alert::success('¡Guardado!', 'Paciente registrado');
        return redirect()->route('pacientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $detalles=Paciente::find($id);
        return view('layouts.pacientes.detaPac', compact('detalles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $editar=Paciente::find($id);
        return view('layouts.pacientes.editPac', compact('editar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [  
            'nom_pac'=>'required|string',
            'app_pac'=>'required|string',
            'apm_pac'=>'string',
            'tel_pac'=>'required|string', 
            'dir_pac'=>'required|string',
            'telRef_pac'=>'required|string',
            'sex_pac'=>'required|string',
            'estCiv_pac'=>'required|string',
            'pro_pac'=>'required|string',
            'fecNac'=>'required',

        ]);
        Paciente::find($id)->update($request->all());
        Alert::success('Guardado', 'Edición correcta');
        return redirect()->route('pacientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('pacientes')->where('id', $id)->update(['activo' => 'no']);
        Alert::success('Paciente eliminado', 'Eliminación correcta');
        return redirect()->route('pacientes.index');
    }

    //public function crearPdf($datos,$vistaurl)
    //{
      //  $data=$datos;
        //$date=date('Y-m-d');
        //$view=\View::make('$vistaurl', compact('data','date'))->render();
        //$pdf=\App::make('dompdf.wrapper');
        //$pdf->loadHTML($view);
        //return $pdf->stream('reporte');
    //}


    //public function crearReporte($id)
    //{
      //  $vistaurl="layouts.pacientes.detaPac";
      //  $paciente=Paciente::all();
      //  return $this->crearPdf($paciente,$vistaurl);
    //}




    public function pdf($id)
    {
        $detalles=Paciente::find($id);
        $pdf=PDF::loadView('layouts.pdf.prueba',compact('detalles'));
        return $pdf->stream();
        //return $pdf->download('listado.pdf');
    }








}
