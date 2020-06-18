@extends('layouts.sidebar.admsidebar')
@section('contenido')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Formulario "Agregar Especialidad"</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>¡Error!</strong> Revise los campos obligatorios.<br><br>
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
      </div>
    @endif
    
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
              <form class="form-horizontal" method="POST" action="{{ route('especialidad.store') }}" >

                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label class="col-sm-5 control-label">Nuevo código de especialidad</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="codesp" name="cod_esp" placeholder="Numeros enteros (1-99)" maxlength="2" value="{{ old('cod_esp') }}" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-6 control-label">Nombre</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nomesp" name="nom_esp" placeholder="Nombre de Especialidad" required value="{{ old('nom_esp') }}">
                    </div>
                    <!--hidden-->
                    <!--<div class="col-sm-10">
                      <input type="radio" class="form-control" id="activo" name="activo" value="si" hidden checked>
                    </div>-->
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Registrar</button>
                  <button type="reset" class="btn btn-danger float-right">Borrar todo</button>
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