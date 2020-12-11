<section class="container-fluid">
		<div class="row">
		<div class="col-lg-4 col-md-2 col-sm-12 col-xs-1 d-none d-sm-block text-white"></div>					
		<div class="align-content-center justify-content-center col-lg-4 col-md-8 col-sm-12 col-xs-12 colorD conte"><p class="titulo"><br>Crear Cuenta</p>	
		<form method="POST" action="<?php echo base_url();?>/index.php/AdminProyecto/alta" role="form" onsubmit="return validacion();" >
				<div class="form-group">
					 <label >Email</label>
					 <input type="text" name="email" id="email" value="" required="" class="form-control">		
				</div>

				<div class="form-group">
					 <label for="usr">Nombre</label>
					 <input type="text" name="nombre" id="nombre" value="" required="" class="form-control">
				</div>

				<div class="form-group">
					 <label for="usr">Apellido Paterno</label>
					 <input type="text" name="ap" id="ap" value="" required="" class="form-control">
				</div>

				<div class="form-group">
					 <label for="usr">Apellido Materno</label>
					 <input type="text" name="am" id="am" value="" required="" class="form-control">
				</div>

				<div class="form-group">
					 <label for="usr">Nombre Usuario</label>
					 <input type="text" name="nu" id="nu" value="" required="" class="form-control">
				</div>

				<div class="form-group">
					 <label for="usr">Telefono</label>
					 <input type="text" name="telefono" id="telefono" value="" required="" class="form-control" size="10" maxlength="10
					 ">
				</div>

				<div class="form-group">
					  <label for="pw">Contraseña:</label>
					  <input type="password" class="form-control" name="password" value="" required="" id="password" placeholder="****************">
				</div>
				<br> 
						<button class="nav-link btn btn-success d-block mx-auto col-lg-8 col-md-8 col-sm-8 col-xs-1"  type="submit">Submit</button>
				<br>		
		</form>
		</div>

			<div class="col-lg-4 col-md-2 col-sm-1 col-xs-1 d-none d-sm-block"></div>
	</div> 	
</section>
</body>
</html>