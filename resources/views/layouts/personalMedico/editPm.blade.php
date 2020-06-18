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
            <h1>Editar Personal Médico</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ Route('home') }}">Inicio</a></li>
              <li class="breadcrumb-item active">Editar Personal Médico</li>
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
                <h3 class="card-title">Editar Personal Médico</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="POST" action="{{ route('medicos.update', $editar->id) }}" role="form">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="card-body">
                  <div class="form-group">
                    <label class="col-sm-10 control-label">Nombre(s)</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nom_pm" name="nom_pm" placeholder="Nombre o nombres" value="{{ $editar->nom_pm }}" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Apellido Paterno</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="app_pm" name="app_pm" placeholder="Apellido paterno" value="{{ $editar->app_pm }}" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Apellido Materno</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="apm_pm" name="apm_pm" placeholder="Apellido materno (campo NO obligatorio)" value="{{ $editar->apm_pm }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Cargo Personal Médico</label>
                      <div class="form-check">
                      <input class="form-check-input" type="radio" value="Med" name="car_pm" >
                      <label class="form-check-label">Médico</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                      <input class="form-check-input" type="radio" value="Enf" name="car_pm" checked>
                      <label class="form-check-label">Enfermero(a)</label>
                    </div>
                  </div>


                  <div class="card-body">
                  <div class="form-group">
                    <label class="col-sm-10 control-label">Años de Experiencia</label>

                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="exp_pm" name="exp_pm" placeholder="Años de Experiencia" value="{{ $editar->exp_pm }}" required>
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-sm-10 control-label">Turno de Servicio</label>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" value="mañana" name="tur_pm" >
                      <label class="form-check-label">Mañana</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                      <input class="form-check-input" type="radio" value="tarde" name="tur_pm">
                      <label class="form-check-label">Tarde</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                      <input class="form-check-input" type="radio" value="noche" name="tur_pm">
                      <label class="form-check-label">Noche</label>
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-sm-10 control-label">Teléfono o celular</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="tel_pm" name="tel_pm" placeholder="Número de telefono o celular" value="{{ $editar->tel_pm }}" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Dirección</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="dir_pm" name="dir_pm" placeholder="Dirección de residencia" value="{{ $editar->dir_pm }}" required>
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-sm-10 control-label">Sexo (completar)</label>
                      <div class="form-check">
                      <input class="form-check-input" type="radio" value="M" name="sex_pm" required>
                      <label class="form-check-label">Masculino</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                      <input class="form-check-input" type="radio" value="F" name="sex_pm" required>
                      <label class="form-check-label">Femenino</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input class="form-check-input" type="radio" value=O name="sex_pm" required>
                      <label class="form-check-label">Otro</label>
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-sm-10 control-label">Teléfono o celular de Referencia</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="telRef_pm" name="telRef_pm" placeholder="Numero de teléfono o celular de referencia" value="{{ $editar->telRef_pm }}" required>
                    </div>
                  </div>



                  <div class="form-group">
                    <label class="col-sm-10 control-label">Fecha de Nacimiento</label>

                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="fecNac_pm" name="fecNac_pm" value="{{ $editar->fecNac_pm }}" required>
                    </div>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="button" value="Actualizar" class="btn btn-success btn-block" 
                  onclick="
                  swal({
                    title: '¿Editar Personal Médico?',
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
                  <a href="{{ route('medicos.index') }}" class="btn btn-info btn-block" >Atrás</a>
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