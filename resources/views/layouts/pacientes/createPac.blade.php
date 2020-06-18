
<div class="modal fade" id="addEsp">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4>Nuevo Paciente</h4>
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
				<form class="form-horizontal" method="POST" action="{{ route('pacientes.store') }}" >

                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label class="col-sm-10 control-label">CI</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="ci_pac" name="ci_pac" placeholder="Cédula de identidad" value="{{ old('ci_pac') }}" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-10 control-label">Nombre(s)</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nom_pac" name="nom_pac" placeholder="Nombre o nombres" value="{{ old('nom_pac') }}" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Apellido Paterno</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="app_pac" name="app_pac" placeholder="Apellido paterno" value="{{ old('app_pac') }}" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Apellido Materno</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="apm_pac" name="apm_pac" placeholder="Apellido materno " value="{{ old('apm_pac') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Teléfono o celular</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="tel_pac" name="tel_pac" placeholder="Número de telefono o celular" value="{{ old('tel_pac') }}" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Dirección</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="dir_pac" name="dir_pac" placeholder="Dirección de residencia" value="{{ old('dir_pac') }}" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Teléfono o celular de Referencia</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="telRef_pac" name="telRef_pac" placeholder="Numero de teléfono o celular de referencia" value="{{ old('telRef_pac') }}" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Sexo</label>
                      <div class="form-check">
                      <input class="form-check-input" type="radio" value="M" name="sex_pac" required>
                      <label class="form-check-label">Masculino</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                      <input class="form-check-input" type="radio" value="F" name="sex_pac" required>
                      <label class="form-check-label">Femenino</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input class="form-check-input" type="radio" value="O" name="sex_pac" required>
                      <label class="form-check-label">Otro</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Estado Civil</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="estCiv_pac" name="estCiv_pac" placeholder="Estado civil actual" value="{{ old('estCiv_pac') }}" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Profesión</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="pro_pac" name="pro_pac" placeholder="Profesión actual" value="{{ old('pro_pac') }}" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-10 control-label">Fecha de Nacimiento</label>

                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="fecNac_pac" name="fecNac" value="{{ old('fecNac') }}" required>
                    </div>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Nuevo Paciente</button>
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