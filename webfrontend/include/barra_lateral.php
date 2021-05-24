
<h3>Seleccione</h3>

<div class="dropdown-divider"></div>

<h4>Por uvas:</h4>

<ul class="navbar-nav ml-auto">
  <li class="nav-item"><a class="nav-link" href="vinos.php?categoria=?>&categorias_tipo=<?php echo (isset($_GET['categorias_tipo']))?$_GET['categorias_tipo']:""; ?>">Todos</a></li>
<?php 

foreach ($categorias_uvas as $categorias_uva) {?>
  <li class="nav-item"><a class="nav-link" href="vinos.php?categorias_uva=<?php echo $categorias_uva['nombre']?>&categorias_tipo=<?php echo (isset($_GET['categorias_tipo']))?$_GET['categorias_tipo']:""; ?>"><?php echo $categorias_uva['nombre']; ?></a></li>
<?php } ?>
</ul>

<div class="dropdown-divider"></div>

<h4>Por tipos:</h4>

<ul class="navbar-nav ml-auto">
  <li class="nav-item"><a class="nav-link" href="vinos.php?categoria=?>&categorias_uva=<?php echo (isset($_GET['categorias_uva']))?$_GET['categorias_uva']:""; ?>">Todos</a></li>
<?php foreach ($categorias_tipos as $categorias_tipo) {?>
  <li class="nav-item"><a class="nav-link" href="vinos.php?categorias_tipo=<?php  echo $categorias_tipo['nombre']?>&categorias_uva=<?php echo (isset($_GET['categorias_uva']))?$_GET['categorias_uva']:""; ?>"><?php echo $categorias_tipo['nombre']; ?></a></li>
<?php } ?>
</ul>

<?php 

/*
Esto es solo pruvas

foreach($productos as $producto){
   foreach($categorias_tipos as $categorias_tipo){
      if($producto['categotiaTipo'] == $categorias_tipo['nombre']){
        echo $categorias_tipo['nombre']."<br/>";
      }else{ echo "";}
   }
}*/
/*
foreach($categorias_tipos as $categorias_tipo){
   foreach($productos as $producto){
      if($producto['categotiaTipo'] == $categorias_tipo['nombre']){
        echo $producto['categotiaTipo']."<br/>";
      }else{ echo "";}
   }
}


foreach($categorias_tipos as $categorias_tipo){ 
  
  
    $tempArr = array_unique(array_column($productos, 'categotiaTipo'));
    print_r(array_intersect_key($productos, $tempArr));



 if($categorias_tipo['nombre'] == "" ){
$categorias_tipo['nombre'] = FALSE;
?><ul class="navbar-nav ml-auto">
<li class="nav-item"><a class="nav-link" href="vinos.php?categorias_tipo=<?php  echo $categorias_tipo['nombre']?>&categorias_uva=<?php echo (isset($_GET['categorias_uva']))?$_GET['categorias_uva']:""; ?>"><?php echo $categorias_tipo['nombre']; ?></a></li>
</ul><?php
}

}*/
?>

