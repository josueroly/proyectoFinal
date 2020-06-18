

@extends('layouts.sidebar.admsidebar')
@section('contenido')

<!-- Main content -->
    <section class="content-header">

      <div class="container-fluid">

      <div class="row" style="justify-content: center;">
        <div class="col-10">
            

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Detalles del Personal Médico <a href="{{ route('medicos.index') }}" class="btn btn-info btn-sm float-right">Atrás</a> 

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <tr><th >Código</th>
                  <td colspan="2" align="center">{{ $detalles->id }}</td><th>Cargo</th><td colspan="2" align="center">{{ $detalles->car_pm }}</td>
                </tr>
                <tr><th>Nombre</th>
                  <td>{{ $detalles->nom_pm }}</td><td>{{ $detalles->app_pm }}</td><td>{{ $detalles->apm_pm }}</td><th>Sexo:</th> <td>{{ $detalles->sex_pm }}</td>
                </tr>
                <tr><th>Dirección</th>
                  <td colspan="5">{{ $detalles->dir_pm }}</td>
                </tr>
                <tr><th>Tel/Cel</th>
                  <td colspan="2">{{ $detalles->tel_pm }}</td><th>Tel/Cel Referencia</th><td colspan="2">{{ $detalles->telRef_pm }}</td>
                </tr>
                <tr><th>Turno</th>
                  <td>{{ $detalles->tur_pm }}</td><th>Años de Exp</th><td>{{ $detalles->exp_pm }}</td><th>Fecha Nacimiento</th><td>{{ $detalles->fecNac_pm }}</td>
                </tr>

              </table>
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    </section>
@endsection