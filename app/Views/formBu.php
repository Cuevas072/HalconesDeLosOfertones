<section class="container-fluid">
			<div class="row">

				<div class="col-lg-4 col-md-2 col-sm-12 col-xs-1 d-none d-sm-block text-white"></div>				

			
				<div class="align-content-center justify-content-center col-lg-4 col-md-8 col-sm-12 col-xs-12 colorD conte"><p class="titulo"><br>Introduce el Id</p>
					<form method="POST" action="<?php echo base_url();?>/index.php/AdminUsuarioA/busquedaE" role= "form">
							<div class="form-group">
								 <label >Buscar por ID</label>
								 <input type="text" name="id" id="id" value="" required="" class="form-control">		
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