<?php
$seccion = 'productsList';
include_once('include/head.php');
include_once('include/topbar.php'); 
include_once('include/lateralbar.php');
include_once(DIR_BASE.'business/productsBusiness.php');
include_once(DIR_BASE.'business/trademarkBusiness.php');
include_once(DIR_BASE.'business/categoryTipoBusiness.php');
include_once(DIR_BASE.'business/categoryUvaBusiness.php');

$productos = businessObtenerProductos();
$catTipo = businessObtenerTipos();
$catUva = businessObtenerUvas();
$marca = businessObtenerMarcas();

if(isset($_GET['del'])){
  businessBorrarProducto($_GET['del']);
  businesseliminar_archivos($_GET['del']);
  redirect('productsList.php');

}

?>

  <!-- Envoltorio de contenido. Contiene contenido de la página -->
  <div class="content-wrapper">
    <!-- Contiene Header-->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
              <div class="contaner">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Productos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="#">Productos</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
       <div class="card-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              <h3 class="card-title">Lista de productos</h3><a href="productsNew.php"><span class="material-icons">add</span></a>
                <form action="productsList.php" target="">
                <select name="seleccionProucto" id="seleccionPro">
                <option value="">Buscar Producto</option>
                  <?php
                  foreach (businessObtenerProductos() as $catProd) {?>
                  <option value="<?php echo $catProd ['id']?>"><?php echo $catProd['nombre']?></option>
                  <?php } ?>
                  <input type="submit" value="Ver">
                </select>
                </form>
                <form action="productsList.php" target="">
                <select name="seleccionTipos" id="seleccionPro"> 
                <option value="">Buscar Tipo</option>
                  <?php
                  foreach (businessObtenerTipos() as $catProd) {?>
                  <option value="<?php echo $catProd ['id']?>"><?php echo $catProd['nombre']?></option>
                  <?php } ?>
                  <input type="submit" value="Ver">
                </select>
                </form>
                <form action="productsList.php" target="">
                <select name="seleccionUvas" id="seleccionPro">
                <option value="">Buscar Uva</option>
                  <?php
                  foreach (businessObtenerUvas() as $catProd) {?>
                  <option value="<?php echo $catProd ['id']?>"><?php echo $catProd['nombre']?></option>
                  <?php } ?>
                  <input type="submit" value="Ver">
                </select>
                </form>
                <form action="productsList.php" target="">
                <select name="seleccionMarcas" id="seleccionPro">
                <option value="">Buscar Marca</option>
                  <?php
                  foreach (businessObtenerMarcas() as $catProd) {?>
                  <option value="<?php echo $catProd ['id']?>"><?php echo $catProd['Bodegas']?></option>
                  <?php } ?>
                  <input type="submit" value="Ver">
                </select>
                </form>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 200px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Busqueda">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 400px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Precio</th>
                      <th>Contenido</th>
                      <th>Cosecha</th>
                      <th>Categoría Tipo</th>
                      <th>Categoría Uva</th>
                      <th>Marca</th>
                      <th>Descripción</th>
                      <th>Activo</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>

           <?php foreach (businessObtenerProductos() as $prod){ 
                $print = true;

					if(!empty($_GET['seleccionProucto']) AND $print){
						if($prod['id'] != $_GET['seleccionProucto']) $print = FALSE;
					}
					if(!empty($_GET['seleccionTipos']) AND $print){
						if($prod['categotiaTipo'] != $_GET['seleccionTipos']) $print = FALSE;
					}

          if(!empty($_GET['seleccionUvas']) AND $print){
						if($prod['categotiaUva'] != $_GET['seleccionUvas']) $print = FALSE;
					}
          if(!empty($_GET['seleccionMarcas']) AND $print){
						if($prod['marca'] != $_GET['seleccionMarcas']) $print = FALSE;
					}

				 	if($print){ ?>

                    <tr>
                      <td><?php echo $prod ['id']?></td>
                      <td><?php echo $prod ['nombre']?></td>
                      <td><?php echo "$ ". $prod ['precio']?></td>
                      <td><?php echo $prod ['contenido']?></td>
                      <td><?php echo $prod ['cosecha']?></td>
                      <td><?php echo $catTipo[$prod ['categotiaTipo']]['nombre']?></td>
                      <td><?php echo $catUva[$prod ['categotiaUva']]['nombre']?></td>
                      <td><?php echo $marca[$prod ['marca']]['Bodegas']?></td>
                      <td><?php echo $prod ['descripcion']?></td>
                      <td><?php echo $prod ['activa']?'SI':'NO'?></td>
                      <td>
                      <a href="productsNew.php?edit=<?php echo $prod ['id']?>"><span class="material-icons">edit</span></a>
                      <a href="productsList.php?del=<?php echo $prod ['id']?>"><span class="material-icons">delete</span></a>
                      </td>
                    </tr>




            <?php } } ?>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        </div>
        
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

                  </div>
                </div><!-- /.row -->
              </div><!-- /.contaner -->
          </div><!-- /.col-sm-12" -->
        </div><!-- /.row mb-2 -->
      </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->
  </div><!-- /.content-wrapper -->

  <!-- Menú Footer -->
 <?php  include_once('include/footer.php') ?>  