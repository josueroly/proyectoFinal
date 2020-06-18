

@extends('layouts.sidebar.admsidebar')
@section('contenido')

<!-- Main content -->
    <section class="content-header">

      <div class="container-fluid">

      <div class="row">
        <div class="col-12">
            

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Listado del Personal Médico
                <button class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#addEsp" ><span class="fa fa-users mr-2"></span> Nuevo Personal Médico
                </button>
              </h3>
              @include('layouts.personalMedico.createPm')

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Cargo</th>
                  <th>Nombre</th>
                  <th>Paterno</th>
                  <th>Materno</th>
                  <th>Ver</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
                </thead>
                <tbody>
                  
                  @foreach($medicos as $listado)
                  <tr>
                    <td>{{$listado-> car_pm }}</td>
                    <td>{{$listado-> nom_pm}}</td>
                    <td>{{$listado-> app_pm}}</td>
                    <td>{{$listado-> apm_pm}}</td>
                    <td><a class="btn btn-primary btn-sm"  href="{{action('Personal_medicosController@show', $listado->id)}}"><span class="glyphicon glyphicon-pencil">Ver</span></a></td>
                    <!--EDITAR-->
                    <td><a class="btn btn-warning btn-sm" href="{{action('Personal_medicosController@edit', $listado->id)}}"><span class="glyphicon glyphicon-pencil">Editar</span></a></td>
                    <td>
                      <form action="{{action('Personal_medicosController@destroy', $listado->id)}}" method="POST">
                        {{csrf_field()}}
                        {{ method_field('DELETE') }}
                        <input type="button" class="btn btn-danger btn-sm" value="Eliminar" onclick="
                          swal({
                            title: '¿Eliminar de la lista?',
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
                                    text: 'No se eliminará',
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
                  <th>Cargo</th>
                  <th>Nombre</th>
                  <th>Paterno</th>
                  <th>Materno</th>
                  <th>Ver</th>
                  <th>Editar</th>
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