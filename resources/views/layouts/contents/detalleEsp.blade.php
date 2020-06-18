<div>

<div class="modal fade" id="detalles">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4>Detalles de Especialidad</h4>
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
				
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
                  <tr>
                    <th style="width: 10px">ID</th>
                    <th>Nombre</th> 
                  </tr>
                  <tr>
                  	<td>{{ $especialidade->id }}</td>
                  	<td>{{ $especialidade->nom_esp }}</td>
                  </tr>

                </table>
			</div>

			<!--<div class="modal-footer">
				
			</div>-->
		</div>
	</div>	
</div>

</div>