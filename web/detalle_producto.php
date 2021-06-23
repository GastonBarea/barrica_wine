<?php
$idproducto = 1;
include_once('config/config.php');
include_once(DIR_BASE.'include/header.php');
include_once(DIR_BASE.'business/comentariosBusiness.php');
include_once(DIR_BASE.'business/productsBusiness.php');

$uvas_j = file_get_contents(DIR_BASE.'datos/uvas.json');
$categorias_uvas = json_decode($uvas_j,true);
$tipos_j = file_get_contents(DIR_BASE.'datos/tipos.json');
$categorias_tipos = json_decode($tipos_j,true);
$marcas_j = file_get_contents(DIR_BASE.'datos/c_marcas_bodegas.json');
$marcas = json_decode($marcas_j,true);

//var_dump($_GET);
if(isset ($_POST['form1'])){
//    var_dump($_POST);

    businessGuardarComentarios($_POST);
    

}

?>
  <div class="container-fluid">
                <div class="row">
                <?php            
                $producto = businessObtenerproducto($_GET['producto']);                         
                ?>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                            <article class="">
                                <div class="card m-1">
                                    <img src="<?php echo 'img/'.$producto['imagenLG'];?>" alt="...">
                                </div>
                            </article>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7">
                            <article class="">
                                <div class="card m-1">

                                    <div class="card-body">
                                        <h3><?php echo $producto['nombre'];?></h3>
                                        <h4><?php echo $marcas[$producto['categotiaTipo']]['Bodegas'];?></h4>
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
                                        <p class="card-text"><?php echo $categorias_uvas[$producto['categotiaTipo']]['nombre'];?></p>
                                        <p class="card-text"><?php echo $categorias_tipos[$producto['categotiaTipo']]['nombre'];?></p>
                                        <p class="card-text"><?php echo $producto['descripcion'];?></p>


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
                                        <form name="comentario", method="POST">
                                            <div class="mb-3">                                       
                                            <label for="exampleFormControlInput1" class="form-label" name="email"></label>
                                            <input name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                            </div>
                                            <div class="mb-3">                                       
                                            <label for="exampleFormControlInput1" class="form-label" name="nombre"></label>
                                            <input name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Luis Perez">
                                            </div>
                                            <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label" ></label>
                                            <textarea class="form" name="mensaje" cols="30" rows="8" placeholder="*Comenta este producto:..."></textarea>
                                            <input type="submit" name= "form1"class="btn btn-primary m-3">
                                            <input type="hidden" name="producto" value="<?php echo $producto['id']?>">
                                        <!--<input class="btn btn-success" type="submit" name="submitCom" value="Enviar">-->
                                        </div>
                                        </form>
              


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

                                                <?php 
                                                $comentario = businessObtenerComentarios();
                                                krsort($comentario);
                                                
                                                foreach($comentario as $c){
                                                    if($producto['id'] == $c['producto']){?>
                                                    <div class="card m-1">
                                                    <?php echo $c['nombre'].':'.$c['mensaje'].'<br />';?>
                                                    </div><?php                                            
                                                    }

                                                }
                                                
                                                
                                                
                                                ?>

                                    </div>
                                </div>
                            </article>
                    </div>
                </div>


</div>




<?php 

include_once(DIR_BASE.'include/footer.php')?>
