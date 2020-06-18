

@extends('layouts.sidebar.admsidebar')
@section('contenido')

<!-- Main content -->
    <section class="content-header">

      <div class="container-fluid">

      <div class="row" style="justify-content: center;">
        <div class="col-10">
            

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Detalles de Paciente <a href="{{ route('pacientes.index') }}" class="btn btn-info btn-sm float-right">Atrás</a> <a href="{{ route('pacientes.index') }}" class="btn btn-info btn-sm float-right">imprimir</a>
              </h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <tr><th >Código</th>
                  <td colspan="2" align="center">{{ $detalles->id }}</td><th>C.I.</th><td colspan="2" align="center">{{ $detalles->ci_pac }}</td>
                </tr>
                <tr><th>Nombre</th>
                  <td>{{ $detalles->nom_pac }}</td><td>{{ $detalles->app_pac }}</td><td>{{ $detalles->apm_pac }}</td><th>Sexo:</th> <td>{{ $detalles->sex_pac }}</td>
                </tr>
                <tr><th>Dirección</th>
                  <td colspan="5">{{ $detalles->dir_pac }}</td>
                </tr>
                <tr><th>Tel/Cel</th>
                  <td colspan="2">{{ $detalles->tel_pac }}</td><th>Tel/Cel Referencia</th><td colspan="2">{{ $detalles->telRef_pac }}</td>
                </tr>
                <tr><th>Estado Civil</th>
                  <td>{{ $detalles->estCiv_pac }}</td><th>Profesión</th><td>{{ $detalles->pro_pac }}</td><th>Fecha Nacimiento</th><td>{{ $detalles->fecNac }}</td>
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