<?php
$idproducto = 1;
include_once('config/config.php');
include_once(DIR_BASE.'include/header.php');
include_once(DIR_BASE.'DAO/comentarios.php');
include_once(DIR_BASE.'DAO/productos.php');
var_dump($_GET);
if(isset ($_POST['submitCom'])){
    var_dump($_POST);

    guardarComentarios($_POST);
    

}

?>
  <div class="container-fluid">
                <div class="row">
                <?php            
                $producto = obtenerProducto($_GET['producto']);                           
                ?>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                            <article class="">
                                <div class="card m-1">
                                    <img src="<?php echo $producto['imagenLG'];?>" alt="...">
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
                                            <textarea class="form" name="mensaje" cols="30" rows="8" placeholder="*Dejanos tu consulta:..."></textarea>
                                            <input type="submit" name= "submitCom"class="btn btn-primary m-3">
                                            <input type="hidden" name="producto" value="<?php echo $producto['id']?>">
                                        <!--<input class="btn btn-success" type="submit" name="submitCom" value="Enviar">-->
                                        </div>
                                        </form>
                                            <?php 
                                            $comentario = obtenerComentarios();
                                            krsort($comentario);
                                            
                                            foreach($comentario as $c){
                                                if($producto['id'] == $c['producto']){

                                                    echo $c['nombre'].':'.$c['mensaje'].'<br />';                                                   
                                                }

                                            }
                                            
                                            
                                            
                                            ?>



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




<?php 

include_once(DIR_BASE.'include/footer.php')?>
