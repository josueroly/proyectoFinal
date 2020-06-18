
<div class="modal fade" id="addEsp">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4>Nuevo Personal Médico</h4>
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
				
			</div>
			<div class="modal-body" >
				@if (count($errors) > 0)
      				<div class="alert alert-danger">
        				<strong>¡Error!</strong> detalles a continuación:<br><br>
          				<ul>
            		@foreach ($errors->all() as $error)
              			<li>{{ $error }}</li>
            		@endforeach
          				</ul>
      				</div>
              
    			@endif
				<form class="form-horizontal" method="POST" action="{{ route('medicos.store') }}" >

                {{ csrf_field() }}
                
                  <div class="form-group">
                    <label class="col-sm-10 control-label">Nombre(s)</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nom_pm" name="nom_pm" placeholder="Nombre o nombres" value="{{ old('nom_pm') }}" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Apellido Paterno</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="app_pm" name="app_pm" placeholder="Apellido paterno" value="{{ old('app_pm') }}" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Apellido Materno</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="apm_pm" name="apm_pm" placeholder="Apellido materno" value="{{ old('apm_pm') }}">
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
                      <input type="number" class="form-control" id="exp_pm" name="exp_pm" placeholder="Años de Experiencia" value="{{ old('exp_pm') }}" required>
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
                      <input type="text" class="form-control" id="tel_pm" name="tel_pm" placeholder="Número de telefono o celular" value="{{ old('tel_pm') }}" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Dirección</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="dir_pm" name="dir_pm" placeholder="Dirección de residencia" value="{{ old('dir_pm') }}" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Sexo</label>
                      <div class="form-check">
                      <input class="form-check-input" type="radio" value="M" name="sex_pm" required>
                      <label class="form-check-label">Masculino</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                      <input class="form-check-input" type="radio" value="F" name="sex_pm" required>
                      <label class="form-check-label">Femenino</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input class="form-check-input" type="radio" value="O" name="sex_pm" required>
                      <label class="form-check-label">Otro</label>
                    </div>
                  </div>



                  <div class="form-group">
                    <label class="col-sm-10 control-label">Teléfono o celular de Referencia</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="telRef_pm" name="telRef_pm" placeholder="Numero de teléfono o celular de referencia" value="{{ old('telRef_pm') }}" required>
                    </div>
                 </div>


                  <div class="form-group">
                    <label class="col-sm-10 control-label">Fecha de Nacimiento</label>

                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="fecNac_pm" name="fecNac_pm" value="{{ old('fecNac_pm') }}" required>
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-sm-10 control-label">Especialidad</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="especialidad_id" name="especialidad_id" placeholder="Codigo de especialidad" value="{{ old('especialidad_id') }}" required>
                    </div>
                 </div>



                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Nuevo Personal Médico</button>
                  <button type="reset" class="btn btn-danger float-right">Limpiar</button>
                </div>
                <!-- /.card-footer -->
              </form>
			</div>

			<!--<div class="modal-footer">
				
			</div>-->
		</div>
	</div>	
</div>