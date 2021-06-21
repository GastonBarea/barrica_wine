<?php 
$seccion = 'NuestrosVinos';
include_once('config/config.php');
include_once(DIR_BASE.'include/header.php');
include_once(DIR_BASE.'helpers/string.php');
$uvas_j = file_get_contents(DIR_BASE.'datos/uvas.json');
$categorias_uvas = json_decode($uvas_j,true);
$tipos_j = file_get_contents(DIR_BASE.'datos/tipos.json');
$categorias_tipos = json_decode($tipos_j,true);
$productos_j = file_get_contents(DIR_BASE.'datos/productos.json');
$productos = json_decode($productos_j,true);
$marcas_j = file_get_contents(DIR_BASE.'datos/c_marcas_bodegas.json');
$marcas = json_decode($marcas_j,true);

?>


    <section class="vinos">
        <div class="container-fluid">
            <div class="row">

                <h1 class="col-sm-12 text-center titpaginasvarias">Vinos</h1>
                <h2 class="col-sm-12 text-center subtitulonuestrosvinos">Una selección de las mejores cosechas de nustro país</h2>


<div class="col-lg-2 col-md-2 col-sm-2">
<?php include_once('include/barra_lateral.php'); ?>
</div>
<div class="col-lg-10 col-md-10 col-sm-10">
    <div class="row">
            
            <?php foreach ($productos as $producto){ 
                $print = true;

					if(!empty($_GET['categorias_uva']) AND $print){
						if($producto['categotiaUva'] != $_GET['categorias_uva']) $print = FALSE;
					}

					if(!empty($_GET['categorias_tipo']) AND $print){
						if($producto['categotiaTipo'] != $_GET['categorias_tipo']) $print = FALSE;
					}

				 	if($print){ ?>


                <div class="col-lg-3 col-md-6 col-sm-12">
                        <article class="">
                            <div class="card">
                                <img src="<?php echo 'img/'.$producto['imagenLG'];?>" alt="...">
                                <div class="card-body">
                                    <h3><?php echo cortar_palabras($producto['nombre'],10)?></h3>
                                    <h4><?php echo cortar_palabras($marcas[$producto['categotiaTipo']]['Bodegas'],20)?></h4>
                                    <p class="card-text"><?php echo cortar_palabras($producto['descripcion'],30)?></p>
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

            </div><!--/.row-->
        </div><!--/.container-fluid-->
    </section><!-- /.section-->







<?php include_once(DIR_BASE.'include/footer.php')?>



