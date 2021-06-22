<?php 
$seccion = 'Home';
include_once('config/config.php');
include_once(DIR_BASE.'include/header.php');
?>
  
  <section class="inicio">
   <div class="container conten-center rounded img-fluid">
    
     <h1 class="pres">Barrica</h1>
     <h2 class="pres">VINOS Y ALGO MÁS</h2>
     
     <a href="vinos.php" class="btn-one btn-avino topmargin-sm text-dark"><span class="material-icons" Style="font-size: 4.5em; margin: 0;">shopping_cart</span></a>
  
  </div>

  </section>

<!--acá va a ir los destacados-->
<?php
$productos_j = file_get_contents(DIR_BASE.'datos/productos.json');
$productos = json_decode($productos_j,true);
$marcas_j = file_get_contents(DIR_BASE.'datos/c_marcas_bodegas.json');
$marcas = json_decode($marcas_j,true);
?>
                
<section class="vinos">
    <div class="container-fluid">
        <div class="row">

                <h1 class="col-sm-12 text-center titpaginasvarias">Nuestros Favoritos</h1>
                <h2 class="col-sm-12 text-center subtitulonuestrosvinos">Promociones, mas vendidos y más!</h2>


            <?php foreach ($productos as $producto) {if ($producto['activa'] == TRUE) {?>
                <div class="col-lg-3 col-md-6 col-sm-12">
                        <article class="">
                            <div class="card">
                                <img src="img/<?php echo $producto['id'];?>/img_0_big.jpg" alt="...">
                                <div class="card-body">
                                    <h3><?php echo $producto['nombre'];?></h3>
                                    <h4><?php echo $marcas[$producto['categotiaTipo']]['Bodegas'];?></h4>
                                    <p class="card-text"><?php echo $producto['descripcion'];?></p>
                                        <a href="#" class="card-link text-danger"><span class="material-icons">favorite_border</span></a>
                                        <a href="#" class="card-link text-dark"><span class="material-icons">add_shopping_cart</span></a>
                                        <a href="detalle_producto.php?producto=<?php echo $producto['id'];?>" class="card-link text-dark"><span class="material-icons">add_circle_outline</span></a>
                                </div>
                            </div>
                        </article>
                </div>
            <?php } } ?>
        </div>
    </div>
</div>
   


<?php include_once(DIR_BASE.'include/footer.php')?>