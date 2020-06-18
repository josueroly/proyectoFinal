@extends('layouts.sidebar.admsidebar')
@section('contenido')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Formulario "Atenciones Medicas"</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ Route('home') }}">Inicio</a></li>
              <li class="breadcrumb-item active">Agregar Atencion Medica</li>
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
            
            
          <!--</div>-->
          <!--/.col (left) -->

          <!-- right column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Formulario de Registro de atencion </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="POST">
                
                <div class="card-body">


                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Especialidad</label>

                    <div class="col-sm-10">
                      <select>
                        <option>1</option>
                      </select>
                    </div>
                  </div>
                
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-6 control-label">Paciente</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="cod_pac" name="cod_pac" placeholder="Paciente">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-6 control-label">Fecha</label>

                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="fec_ate" name="fec_ate" >
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tipo de atencion</label>

                    <div class="col-sm-10">
                      <select>
                        <option>Atencion Interna</option>
                        <option>Atencion Externa</option>                        
                      </select>
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