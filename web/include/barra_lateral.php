<?php 
foreach ($productos as $producto) {
  $categoriastipo[$producto['categotiaTipo']]=$producto['categotiaTipo'];
  $categoriasuva[$producto['categotiaUva']]=$producto['categotiaUva'];
}?>


<h3>Seleccione</h3>

<div class="dropdown-divider"></div>

<h4>Por uvas:</h4>

<ul class="navbar-nav ml-auto">
  <li class="nav-item"><a class="nav-link" href="vinos.php?categoria=?>&categorias_tipo=<?php echo (isset($_GET['categorias_tipo']))?$_GET['categorias_tipo']:""; ?>">Todos</a></li>

<?php foreach ($categorias_uvas as $categorias_uva) {
  if (in_array($categorias_uva['nombre'],$categoriasuva)) {?>
  <li class="nav-item"><a class="nav-link" href="vinos.php?categorias_uva=<?php echo $categorias_uva['nombre']?>&categorias_tipo=<?php echo (isset($_GET['categorias_tipo']))?$_GET['categorias_tipo']:""; ?>"><?php echo $categorias_uva['nombre']; ?></a></li>
<?php } } ?>
</ul>

<div class="dropdown-divider"></div>

<h4>Por tipos:</h4>

<ul class="navbar-nav ml-auto">
  <li class="nav-item"><a class="nav-link" href="vinos.php?categoria=?>&categorias_uva=<?php echo (isset($_GET['categorias_uva']))?$_GET['categorias_uva']:""; ?>">Todos</a></li>

<?php foreach ($categorias_tipos as $categorias_tipo) {
  if (in_array($categorias_tipo['nombre'],$categoriastipo)) {?>
  <li class="nav-item"><a class="nav-link" href="vinos.php?categorias_tipo=<?php  echo $categorias_tipo['nombre']?>&categorias_uva=<?php echo (isset($_GET['categorias_uva']))?$_GET['categorias_uva']:""; ?>"><?php echo $categorias_tipo['nombre']; ?></a></li>
<?php } } ?>
</ul>


