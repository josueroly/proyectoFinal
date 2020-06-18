

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
                <button class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#addEsp" > Agregar Especialidad<span class="glyphicon glyphicon-plus"></span>
                </button>
              </h3>
              @include('layouts.contents.createEsp')

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
                  
                  @foreach($especialidades as $especialidade)
                  <tr>
                    <td>{{$especialidade-> cod_esp }}</td>
                    <td>{{$especialidade-> nom_esp }}</td>

                    <td><a class="btn btn-primary btn-sm"  href="{{action('EspecialidadesController@show', $especialidade->id)}}"><span class="glyphicon glyphicon-pencil">Ver</span></a></td>
                    <!--EDITAR-->
                    <td><a class="btn btn-warning btn-sm" href="{{action('EspecialidadesController@edit', $especialidade->id)}}"><span class="glyphicon glyphicon-pencil">Editar</span></a></td>

                    {{-- ELIMINAR --}}
                    {{--  <td>
                        <a href="{{action('EspecialidadesController@destroy', $especialidade->id)}}" 
                            onclick="event.preventDefault();
                                    document.getElementById('elimina-esp').submit();" 
                            class="btn btn-danger btn-xs">Eliminar</a>
                        
                        <form id="elimina-esp" action="{{ route('especialidad.destroy', $especialidade->id) }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        
                        </form>
                    </td>--}}
                    <td>
                      <form action="{{action('EspecialidadesController@destroy', $especialidade->id)}}" method="POST">
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
                                }
                        })">
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