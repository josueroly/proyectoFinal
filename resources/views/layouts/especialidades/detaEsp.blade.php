

@extends('layouts.sidebar.admsidebar')
@section('contenido')

<!-- Main content -->
    <section class="content-header">

      <div class="container-fluid">

      <div class="row" style="justify-content: center;">
        <div class="col-6">
            

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Detalle de Especliadidad <a href="{{ route('especialidades.index') }}" class="btn btn-info btn-sm float-right">Atrás</a>
              </h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                  <tr>
                    <th style="width: 10px">ID</th>
                    <th>Nombre</th> 
                  </tr>
                  <tr>
                    <td>{{ $listado->id }}</td>
                    <td>{{ $listado->nom_esp }}</td>
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