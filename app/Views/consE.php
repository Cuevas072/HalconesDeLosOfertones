<div class="row">
	<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 d-none d-sm-block "></div>
		<div class="col-lg-6 col-md-4 col-sm-12 col-xs-12  ">
			<table class="table table-bordered table-responsive ">
			<tr>
				<th><strong>Id</strong></th>
				<th><strong>Email</strong></th>
				<th><strong>Nombre</strong></th>
				<th><strong>Apellido Paterno</strong></th>
				<th><strong>Apellido Materno</strong></th>
				<th><strong>Nombre de Usuario</strong></th>
				<th><strong>Contraseña</strong></th>
				<th><strong>Télefono</strong></th>
				<th><strong>NombreP</strong></th>
				
			</tr>
			<?php
			foreach ($usuarios as $personas) 
			{
				echo "<tr>";
				echo "<td><strong>".$personas['id'];
				echo "<td>".$personas['email'];
				echo "<td>".$personas['nombre'];
				echo "<td>".$personas['apellidoPaterno'];
				echo "<td>".$personas['apellidoMaterno'];
				echo "<td>".$personas['nombreUsuario'];
				echo "<td>".$personas['contrasenia'];
				echo "<td>".$personas['telefono'];				
				echo "<td>".$personas['nombreP'];					
				echo "</tr>";		
			}
			?>	
		</table>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 d-none d-sm-block"></div>
</div>


