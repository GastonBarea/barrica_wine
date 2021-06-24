<?php
$seccion = 'marcasList';
include_once('include/head.php');
include_once('include/topbar.php'); 
include_once('include/lateralbar.php');
include_once(DIR_BASE.'business/productsBusiness.php');
include_once(DIR_BASE.'business/trademarkBusiness.php');
include_once(DIR_BASE.'business/categoryTipoBusiness.php');
include_once(DIR_BASE.'business/categoryUvaBusiness.php');

$catTipo = businessObtenerTipos();
$catUva = businessObtenerUvas();
$marca = businessObtenerMarcas();

if(isset($_GET['del'])){
  businessBorrarMarca($_GET['del']);
  redirect('marcasList.php');
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
            <h1>Marcas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="#">Bodegas</a></li>
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
              <h3 class="card-title">Lista de Marcas</h3><a href="marcasNew.php"><span class="material-icons">add</span></a>
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
                      <th>Bodegas</th>
                      <th>Activa</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php foreach(businessObtenerMarcas() as $prod){?>
                    <tr>
                      <td><?php echo $prod ['id']?></td>
                      <td><?php echo $prod ['Bodegas']?></td>
                      <td><?php echo $prod ['Activa']?'SI':'NO'?></td>
                      <td>
                      <a href="marcasNew.php?edit=<?php echo $prod ['id']?>"><span class="material-icons">edit</span></a>
                      <a href="marcasList.php?del=<?php echo $prod ['id']?>"><span class="material-icons">delete</span></a>
                      </td>
                    </tr>
                    <?php }?>
                    
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