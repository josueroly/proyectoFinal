@extends('layouts.sidebar.admsidebar')
@section('contenido')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Formulario "Agregar Personal Medico"</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ Route('home') }}">Inicio</a></li>
              <li class="breadcrumb-item active">Agregar Personal Médico</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <!--<div class="col-md-6">-->
            <!-- general form elements -->
            
            <!-- /.card -->

            <!-- Form Element sizes -->
            
            <!-- /.card -->

            
            <!-- /.card -->

            <!-- Input addon -->
            
            <!-- /.card -->

          <!--</div>-->
          <!--/.col (left) -->

          <!-- right column -->
          <div class="col-md-10">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Formulario de registro</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label class="col-sm-10 control-label">Nuevo Codigo</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="codpm" name="codpm" placeholder="Codigo del Personal Médico" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-10 control-label">Nombre</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nompm" name="nompm" placeholder="Nombre del Personal Medico" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Apellido Paterno</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="appm" name="appm" placeholder="Apellido Parterno del Personal Medico" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Apellido Materno</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="ampm" name="ampm" placeholder="Apellido Materno del Personal Medico">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Cargo Personal Médico</label>
                      <div class="form-check">
                      <input class="form-check-input" type="radio" value="doctor" name="carpm" >
                      <label class="form-check-label">Doctor(a)</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                      <input class="form-check-input" type="radio" value="enfermero" name="carpm" checked>
                      <label class="form-check-label">Enfermero(a)</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Experiencia en Área</label>

                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="exppm" name="exppm" placeholder="Años de Experiencia del Personal Médico">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Turno de Servicio</label>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" value="mañana" name="turpm" >
                      <label class="form-check-label">Mañana</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                      <input class="form-check-input" type="radio" value="tarde" name="turpm">
                      <label class="form-check-label">Tarde</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                      <input class="form-check-input" type="radio" value="noche" name="turpm">
                      <label class="form-check-label">Noche</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Nivel del Usuario</label>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" value="1" name="nivel" >
                      <label class="form-check-label">Nivel 1</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                      <input class="form-check-input" type="radio" value="2" name="nivel" checked>
                      <label class="form-check-label">Nivel 2</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                      <input class="form-check-input" type="radio" value="3" name="nivel">
                      <label class="form-check-label">Nivel 3</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Contraseña de Registro</label>

                    <div class="col-sm-5">
                      <input type="password" class="form-control" id="conpm" name="conpm" placeholder="Contraseña de acceso" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-10 control-label">Confirmar Contraseña</label>

                    <div class="col-sm-5">
                      <input type="password" class="form-control" id="cconpm" name="cconpm" placeholder="Vuelva a esbribir la Contraseña" required>
                    </div>
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