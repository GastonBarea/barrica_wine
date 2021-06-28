<?php
$seccion = 'comentariosList';
include_once('include/head.php');
include_once('include/topbar.php'); 
include_once('include/lateralbar.php');
include_once(DIR_BASE.'business/productsBusiness.php');
include_once(DIR_BASE.'business/comentariosBusiness.php');


$productos = businessObtenerProductos();

if(isset($_GET['del'])){
  businessBorrarComentario($_GET['del']);
  redirect('comentariosList.php');
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
            <h1>Comentarios</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="#">Comentarios</a></li>
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
                <label>Lista de comentarios: </label>
                <form action="comentariosList.php" target="">
                <select name="seleccionProucto" id="seleccionPro">
                <option value="">VER TODOS</option>
                  <?php
                  foreach (businessObtenerProductos() as $catProd) {?>
                  <option value="<?php echo $catProd ['id']?>"><?php echo $catProd['nombre']?></option>
                  <?php } ?>
                  <input type="submit" value="Enviar">
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
                      <th>fecha</th>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>mensaje</th>
                      <th>producto</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                     
                    <?php                   
                    
                    foreach(businessObtenerComentarios() as $prod){
                      $print = TRUE;
                      
                      if(!empty($_GET['seleccionProucto']) AND $print){
                        if($productos[$prod ['producto']]['id'] != $_GET['seleccionProucto']) $print = FALSE;
                      }
                      
                      
                      if($print){
                        if(!empty($_GET['seleccionProucto'])){
                       }
                      ?>
                      
                      
                    <tr>
                      <td><?php echo $prod ['fecha']?></td>
                      <td><?php echo $prod ['nombre']?></td>
                      <td><?php echo $prod ['email']?></td>
                      <td><?php echo $prod ['mensaje']?></td>
                      <td><?php echo $productos[$prod ['producto']]['nombre']?></td>
                      <td>
                      <a href="comentariosList.php?del=<?php echo $prod['id']?>"><span class="material-icons">delete</span></a>
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