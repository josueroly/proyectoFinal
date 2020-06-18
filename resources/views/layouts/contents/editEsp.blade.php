@extends('layouts.sidebar.admsidebar')
@section('contenido')
<!-- Content Header (Page header) -->
@if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Error!</strong> Revise los campos obligatorios.<br><br>
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
            </div>
          @endif
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Formulario "Editar Especialidad"</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ Route('home') }}">Inicio</a></li>
              <li class="breadcrumb-item active">Agregar Especialidad</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row"  style="justify-content: center;">
          <!-- left column -->
          <!--<div class="col-md-6">-->
            <!-- general form elements -->
            
            
          <!--</div>-->
          <!--/.col (left) -->

          <!-- right column -->
          
          <div class="col-md-8">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Formulario de Registro</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="POST" action="{{ route('especialidad.update', $edita->id) }}" role="form">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="card-body">

                  <div class="form-group">
                    <label class="col-sm-5 control-label">Nuevo código de especialidad</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="codesp" name="cod_esp" placeholder="Numeros enteros (1-99)" maxlength="2" value="{{$edita->id}}" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-6 control-label">Nuevo Nombre</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nomesp" name="nom_esp" placeholder="Nombre de Especialidad" value="{{$edita->nom_esp}}" required>
                    </div>
                    <!--hidden-->
                    <!--<div class="col-sm-10">
                      <input type="radio" class="form-control" id="activo" name="activo" value="si" hidden checked>
                    </div>-->
                  
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="button" value="Actualizar" class="btn btn-success btn-block" 
                  onclick="
                  swal({
                    title: '¿Editar Registro?',
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
                  <a href="{{ route('especialidad.index') }}" class="btn btn-info btn-block" >Atrás</a>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
            

            <!-- general form elements disabled -->
            
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    @endsection