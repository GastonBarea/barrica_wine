<?php 
$seccion = 'NuestrosVinos';
include_once('include/header.php');
include_once('datos/d_productos.php');

?>

    <section class="vinos">
        <div class="container-fluid">
            <div class="row">

                <h1 class="col-sm-12 text-center titpaginasvarias">Vinos</h1>
                <h2 class="col-sm-12 text-center subtitulonuestrosvinos">Una selección de las mejores cosechas de nustro país</h2>


<?php include_once('datos/d_productos.php');?>

<?php foreach ($productos as $producto) {?>
                <div class="col-lg-3 col-md-6 col-sm-12">
                        <article class="">
                            <div class="card">
                                <img src="<?php echo $producto['imagenLG'];?>" alt="...">
                                <div class="card-body">
                                    <h3><?php echo $producto['nombre'];?></h3>
                                    <h4><?php echo $producto['categotiaUva'];?></h4>
                                    <p class="card-text"><?php echo $producto['descripcion'];?></p>
                                        <a href="#" class="card-link text-danger"><span class="material-icons">favorite_border</span></a>
                                        <a href="#" class="card-link text-dark" style="$purple"><span class="material-icons">add_shopping_cart</span></a>
                                        <a href="#" class="card-link text-dark"><span class="material-icons">add_circle_outline</span></a>
                                </div>
                            </div>
                        </article>
                </div>
<?php } ?>
            </div>
        </div>
   
    </section>

<?php include_once('include/footer.php')?>