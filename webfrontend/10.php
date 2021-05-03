<?php 
$idproducto = 10;
include_once('config/config.php');
include_once(DIR_BASE.'include/header.php');
include_once(DIR_BASE.'datos/d_productos.php');

?>
<?php foreach ($productos as $producto) { if ($producto['id'] == $idproducto) {?>
  <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                            <article class="">
                                <div class="card">
                                    <img src="<?php echo $productos[$producto['id']]['imagenLG'];?>" alt="...">
                                    <div class="card-body">
                                        <p><?php echo $productos[$producto['id']]['nombre'];?></p>
                                        <p><?php echo $productos[$producto['id']]['marca'];?></p>

                                    </div>
                                </div>
                            </article>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7">
                            <article class="">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <h3><?php echo $productos[$producto['id']]['nombre'];?></h3>
                                        <h4><?php echo $productos[$producto['id']]['marca'];?></h4>
                                        <p class="card-text"><?php echo "$ ".$productos[$producto['id']]['precio'];?></p>
                                        <p class="card-text"><?php echo $productos[$producto['id']]['contenido'];?></p>
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
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <h3><?php echo $productos[$producto['id']]['nombre'];?></h3>
                                        <h4><?php echo $productos[$producto['id']]['marca'];?></h4>
                                        <p class="card-text"><?php echo $productos[$producto['id']]['precio'];?></p>
                                        <p class="card-text"><?php echo $productos[$producto['id']]['contenido'];?></p>
                                        <p class="card-text"><?php echo $productos[$producto['id']]['cosecha'];?></p>
                                        <p class="card-text"><?php echo $productos[$producto['id']]['categotiaTipo'];?></p>
                                        <p class="card-text"><?php echo $productos[$producto['id']]['descripcion'];?></p>
                                        <p>Comentarios de nuestros clientes</p>
                                        <p class="card-text"><?php //foreach ($comentarios as $comentario) {echo $productos[1]['comentarios'];?></p>
   
                                    </div>
                                </div>
                            </article>
                    </div>
                </div>
</div>
<?php } } ?>


<?php include_once(DIR_BASE.'include/footer.php')?>