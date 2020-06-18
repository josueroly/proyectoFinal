@extends('layouts.sidebar.admsidebar')
@section('contenido')
<!-- Content Header (Page header) -->
@if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Error!</strong> Te detallamos los errores:<br><br>
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
            <h1>Editar Paciente</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ Route('home') }}">Inicio</a></li>
              <li class="breadcrumb-item active">Editar Paciente</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row"  style="justify-content: center;">
          
          <div class="col-md-8">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Editar Paciente</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="POST" action="{{ route('pacientes.update', $editar->id) }}" role="form">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="card-body">
                  <div class="form-group">
                    <label class="col-sm-10 control-label">Nombre(s)</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nom_pac" name="nom_pac" placeholder="Nombre o nombres" value="{{ $editar->nom_pac }}" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Apellido Paterno</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="app_pac" name="app_pac" placeholder="Apellido paterno" value="{{ $editar->app_pac }}" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Apellido Materno</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="apm_pac" name="apm_pac" placeholder="Apellido materno (campo NO obligatorio)" value="{{ $editar->apm_pac }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Teléfono o celular</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="tel_pac" name="tel_pac" placeholder="Número de telefono o celular" value="{{ $editar->tel_pac }}" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Dirección</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="dir_pac" name="dir_pac" placeholder="Dirección de residencia" value="{{ $editar->dir_pac }}" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Teléfono o celular de Referencia</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="telRef_pac" name="telRef_pac" placeholder="Numero de teléfono o celular de referencia" value="{{ $editar->telRef_pac }}" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Sexo (completar)</label>
                      <div class="form-check">
                      <input class="form-check-input" type="radio" value="M" name="sex_pac" required>
                      <label class="form-check-label">Masculino</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                      <input class="form-check-input" type="radio" value="F" name="sex_pac" required>
                      <label class="form-check-label">Femenino</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input class="form-check-input" type="radio" value=O name="sex_pac" required>
                      <label class="form-check-label">Otro</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Estado Civil</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="estCiv_pac" name="estCiv_pac" placeholder="Estado civil actual" value="{{ $editar->estCiv_pac }}" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Profesión</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="pro_pac" name="pro_pac" placeholder="Profesión actual" value="{{ $editar->pro_pac }}" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Fecha de Nacimiento</label>

                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="fecNac_pac" name="fecNac" value="{{ $editar->fecNac }}" required>
                    </div>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="button" value="Actualizar" class="btn btn-success btn-block" 
                  onclick="
                  swal({
                    title: '¿Editar Paciente?',
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
                          title: 'Edición cancelada',
                          text: 'No se hará ningún cambio',
                          type: 'info',
                          showConfirmButton: false,
                          timer: 1500,
                        });
                      }
                    })">
                  <a href="{{ route('pacientes.index') }}" class="btn btn-info btn-block" >Atrás</a>
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