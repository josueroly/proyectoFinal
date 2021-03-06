

@extends('layouts.sidebar.admsidebar')
@section('contenido')

<!-- Main content -->
    <section class="content-header">

      <div class="container-fluid">

      <div class="row">
        <div class="col-12">
            

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Especialidades Disponibles
                <button class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#addEsp" ><span class="fa fa-keyboard-o mr-2"></span> Agregar Especialidad
                </button>
              </h3>
              @include('layouts.especialidades.createEsp')

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Codigo</th>
                  <th>Nombre</th>
                  <th>Detalles</th>
                  <th>Modificar</th>
                  <th>Eliminar</th>
                  
                </tr>
                </thead>
                <tbody>
                  
                  @foreach($especialidades as $lista)
                  <tr>
                    <td>{{$lista-> id }}</td>
                    <td>{{$lista-> nom_esp }}</td>

                    <td><a class="btn btn-primary btn-sm"  href="{{action('EspecialidadsController@show', $lista->id)}}"><span class="glyphicon glyphicon-pencil">Ver</span></a></td>
                    <!--EDITAR-->
                    <td><a class="btn btn-warning btn-sm" href="{{action('EspecialidadsController@edit', $lista->id)}}"><span class="glyphicon glyphicon-pencil">Editar</span></a></td>
                    <td>
                      <form action="{{action('EspecialidadsController@destroy', $lista->id)}}" method="POST">
                        {{csrf_field()}}
                        {{ method_field('DELETE') }}
                        <input type="button" class="btn btn-danger btn-sm" value="Eliminar" onclick="
                          swal({
                            title: '¿Eliminar esta Especialidad?',
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
                                    text: 'No se borrará',
                                    type: 'info',
                                    showConfirmButton: false,
                                    timer: 1500,
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
                  <th>Codigo</th>
                  <th>Nombre</th>
                  <th>Detalles</th>
                  <th>Modificar</th>
                  <th>Eliminar</th>
                  
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