

@extends('layouts.sidebar.admsidebar')
@section('contenido')

<!-- Main content -->
    <section class="content-header">

      <div class="container-fluid">

      <div class="row">
        <div class="col-12">
            

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Pacientes --- Eliminados</h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>CI</th>
                  <th>Nombre</th>
                  <th>Paterno</th>
                  <th>Materno</th>
                  <th>Ver</th>
                  <th>Restaurar</th>
                </tr>
                </thead>
                <tbody>
                  
                  @foreach($pacientes as $listado)
                  <tr>
                    <td>{{$listado-> ci_pac }}</td>
                    <td>{{$listado-> nom_pac}}</td>
                    <td>{{$listado-> app_pac}}</td>
                    <td>{{$listado-> apm_pac}}</td>
                    <td><a class="btn btn-primary btn-sm"  href="{{action('PacientesController@show', $listado->id)}}"><span class="glyphicon glyphicon-pencil">Ver</span></a></td>
                    <!--EDITAR-->
                    <td>
                      <form action="{{action('RecuperarController@restPaciente', $listado->id)}}" method="POST">
                        {{csrf_field()}}
                        {{ method_field('DELETE') }}
                        <input type="button" class="btn btn-success btn-sm" value="Restaurar" onclick="
                         swal({
                            title: '¿Recuperar Paciente?',
                            text: 'Si, para confirmar',
                            type: 'question',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: '¡Sí!',
                            cancelButtonText: '¡No!'
                              }).then((result) => {
                                if (result.value) {
                                  form.submit()
                                }else{
                                  swal({
                                    title: 'Opercación cancelada',
                                    text: 'No se efectuará',
                                    type: 'info',
                                     showConfirmButton: false,
                                    timer: 1500
                                  });
                                }
                        });">
                      </form>
                    </td>


                  </tr>
                  @endforeach
                
                </tbody>
                <tfoot>
                <tr>
                  <th>CI</th>
                  <th>Nombre</th>
                  <th>Paterno</th>
                  <th>Materno</th>
                  <th>Ver</th>
                  <th>Restaurar</th>
                </tr>
                </tfoot>
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