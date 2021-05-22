<?php 
$idproducto = 1;
include_once('config/config.php');
include_once(DIR_BASE.'include/header.php');
include_once(DIR_BASE.'datos/d_productos.php');

?>
<?php 
$producto = $productos[$_GET['producto']];
?>
  <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                            <article class="">
                                <div class="card m-1">
                                    <img src="<?php echo $producto['imagenLG'];?>" alt="...">
                                    <div class="card-body">
                                        <p><?php echo $producto['nombre'];?></p>
                                        <p><?php echo $producto['marca'];?></p>

                                    </div>
                                </div>
                            </article>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7">
                            <article class="">
                                <div class="card m-1">
                                    
                                    <div class="card-body">
                                        <h3><?php echo $producto['nombre'];?></h3>
                                        <h4><?php echo $producto['marca'];?></h4>
                                        <p class="card-text"><?php echo "$ ".$producto['precio'];?></p>
                                        <p class="card-text"><?php echo $producto['contenido'];?></p>
                                            <a href="#" class="card-link text-danger"><span class="material-icons">favorite_border</span></a>
                                            <a href="#" class="card-link text-dark"><span class="material-icons">add_shopping_cart</span></a>
                                            
                                    </div>
                                </div>
                            </article>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                            <article class="">
                                <div class="card m-1">
                                    
                                    <div class="card-body">
                                        <h3><?php echo $producto['nombre'];?></h3>
                                        <h4><?php echo $producto['marca'];?></h4>
                                        <p class="card-text"><?php echo $producto['precio'];?></p>
                                        <p class="card-text"><?php echo $producto['contenido'];?></p>
                                        <p class="card-text"><?php echo $producto['cosecha'];?></p>
                                        <p class="card-text"><?php echo $producto['categotiaTipo'];?></p>
                                        <p class="card-text"><?php echo $producto['descripcion'];?></p>
                                        <p>Comentarios de nuestros clientes</p>
                                        <p class="card-text"><?php //foreach ($comentarios as $comentario) {echo $productos[1]['comentarios'];?></p>
   
                                    </div>
                                </div>
                            </article>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                            <article class="">
                                <div class="card m-1">
                                    
                                    <div class="card-body">
                                        <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                        <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        <button type="submit" class="btn btn-primary m-3">Enviar</button>
                                        </div>
   
                                    </div>
                                </div>
                            </article>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                            <article class="">
                                <div class="card m-1">
                                    
                                    <div class="card-body">
                                            
   
                                    </div>
                                </div>
                            </article>
                    </div>
                </div>


</div>



<?php include_once(DIR_BASE.'include/footer.php')?>