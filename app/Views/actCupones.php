<br><br>
<section class="container-fluid mx-auto d-block">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12  text-white">
                <img src="<?php echo base_url();?>/assets/images/iphone-removebg-preview.png" class="rounded img-fluid imgV d-block mx-auto" alt="Cinque Terre" width="250px">
            </div>
            <div class="col-lg-10 col-md-8 col-sm-6 col-xs-12">
            
            <form method="POST" action="<?php echo base_url();?>/index.php/AdminUsuarioA/actualizarCup" role= "form">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
                    <div class="form-group">
                        <label for="comment">Introduce el Id del producto</label>
                        <input type="text" name="idP" id="idP" value="" required="" class="form-control">      
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
                    <div class="form-group">
                        <label for="comment">Introduce tu Id</label>
                        <input type="text" name="idU" id="idU" value="" required="" class="form-control">      
                    </div>
                </div>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg">
                        <div class="form-group">
                            <label for="usr">Nombre del Producto</label>
                            <input type="text" name="nompp" id="nompp" value="" required="" class="form-control">       
                        </div> 
                </div> 
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg"> 
                        <div class="form-group">
                            <label for="email">Categoría del Articulo</label>
                            <input type="text" name="catt" id="catt" value="" required="" class="form-control"> 
                        </div>
                </div>                                          
             
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg">
                        <div class="form-group">
                            <label >Precio</label>
                            <input type="text" name="precioo" id="precioo" value="" required="" class="form-control">      
                        </div>
                        <div class="form-group">
                            <label >Link</label>
                            <input type="text" name="linkk" id="linkk" value="" required="" class="form-control">      
                        </div>              
                </div> 

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
                    <div class="form-group">
                        <label for="comment">Descripción</label>
                        <input type="text" name="desc" id="desc" value="" required="" class="form-control">      
                    </div>
                </div>

                <button class="nav-link btn btn-success d-block mx-auto col-lg-8 col-md-8 col-sm-8 col-xs-1"  type="submit">Actualizar<br></button>    
                       
            </form>
        </div>
        </div>
</section>

</body>
</html>


