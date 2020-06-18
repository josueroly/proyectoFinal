@extends('layouts.sidebar.admsidebar')
@section('contenido')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Agregar Usuario</h1>
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
              <form class="form-horizontal" method="POST" action="{{ route('register') }}" >
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="col-sm-5 control-label" for="name">Nombre</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Nombre de usuario" value="{{ old('name') }}" required autofocus>
                      @if ($errors->has('name'))
                        <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-sm-6 control-label">Correo electrónico</label>

                    <div class="col-sm-10">
                      <input id="email" type="email" class="form-control" name="email" placeholder="Correo" required value="{{ old('email') }}">
                      @if ($errors->has('email'))
                        <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-6 control-label">Contraseña</label>

                      <div class="col-md-10">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Nueva contraseña" required>

                          @if ($errors->has('password'))
                            <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                            </span>
                          @endif
                      </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="password-confirm" class="col-md-6 control-label">Confirmar contraseña</label>

                      <div class="col-md-10">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Vuelve a escribir la contraseña" required>
                      </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Registrar</button>
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