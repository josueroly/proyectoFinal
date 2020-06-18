@extends('layouts.sidebar.admsidebar')
@section('contenido')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Formulario "Agregar Paciente"</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ Route('home') }}">Inicio</a></li>
              <li class="breadcrumb-item active">Agregar Paciente</li>
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
                      <input type="text" class="form-control" id="cod_pac" name="cod_pac" placeholder="Codigo del paciente" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-10 control-label">CI paciente</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="ci_pac" name="ci_pac" placeholder="CI del paciente" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-10 control-label">Nombre</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nom_pac" name="nom_pac" placeholder="Nombre del Paciente" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Apellido Paterno</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="app_pac" name="app_pac" placeholder="Apellido Parterno del Paciente" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Apellido Materno</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="apm_pac" name="apm_pac" placeholder="Apellido Materno del Paciente">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Telefono</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="tel_pac" name="tel_pac" placeholder="telefono o celular del Paciente">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Direccion</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="dir_pac" name="dir_pac" placeholder="Direccion del Paciente">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Telefono de Referencia</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="telRef_pac" name="telRef_pac" placeholder="Telefono de referencia del Paciente">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Sexo</label>
                      <div class="form-check">
                      <input class="form-check-input" type="radio" value="mas" name="sex_pac" >
                      <label class="form-check-label">Masculino</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                      <input class="form-check-input" type="radio" value="fem" name="sex_pac" checked>
                      <label class="form-check-label">Femenino</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Estado Civil</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="estCiv_pac" name="estCiv_pac" placeholder="Estado Civil del Paciente">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Profesion</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="pro_pac" name="pro_pac" placeholder="Profesion del Paciente">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Fecha de Nacimiento</label>

                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="fecNac_pac" name="fecNac_pac" >
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