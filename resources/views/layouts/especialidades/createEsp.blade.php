
<div class="modal fade" id="addEsp">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4>Agregar Especialidad</h4>
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
				
			</div>
			<div class="modal-body">
				@if (count($errors) > 0)
      				<div class="alert alert-danger">
        				<strong>¡Error!</strong> Errores detallados a continuación:<br><br>
          				<ul>
            		@foreach ($errors->all() as $error)
              			<li>{{ $error }}</li>
            		@endforeach
          				</ul>
      				</div>
              
    			@endif
				<form class="form-horizontal" method="POST" action="{{ route('especialidades.store') }}" >

                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-6 control-label">Nombre</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nomesp" name="nom_esp" placeholder="Nombre de Especialidad" required value="{{ old('nom_esp') }}">
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Agregar Especialidad</button>
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