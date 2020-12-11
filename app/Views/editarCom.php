<section class="mb-3">
                <div class="container col-11 pt-2 pb-1">
                    <div class="row">
                        <form method="POST" action="<?php echo base_url();?>/index.php/AdminUsuarioA/actualizarComentarios" role= "form">
                            <div class="form-group">
                                 <label for="usr">Id Comentario a Editar</label>                  
                                 <input type="text" name="idC" id="idC" value="" required="" class="form-control">      
                            </div>

                            <div class="form-group">
                                <label for="comentario">Escribe tu comentario en la siguiente caja de texto:</label>
                                <textarea type="text" class="form-control" id="comentario" placeholder="Comentario"
                                    name="comentario"></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary float-right w-25"><i class="fa fa-comments"></i></button></button>
                        </form>
                    </div>
                </div>
</section>