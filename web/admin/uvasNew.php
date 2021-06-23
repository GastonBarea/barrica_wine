<?php
include_once('include/head.php');
include_once(DIR_BASE.'business/productsBusiness.php');
include_once(DIR_BASE.'business/marcasBusiness.php');
include_once(DIR_BASE.'business/categoryTipoBusiness.php');
include_once(DIR_BASE.'business/categoryUvaBusiness.php');

if (isset($_POST['submit'])) {
  if (!empty($_GET['edit'])) {
    businessModificarCategoriaUva($_POST,$_GET['edit']);
  }else {
    businessGuardarCategoriasUva($_POST);
  }
  redirect('uvasList.php');
}

$producto = array(
  'id' => '',
  'nombre' => '',
  'descripcion' => '',
  'activa' => isset($datos['activa'])?'false':'true',
);

if (!empty($_GET['edit'])) {
  $producto = businessObtenerCategoriaUva($_GET['edit']);
}

?>

  <div class="wrapper">

  <!-- Navbar -->
  <?php  include_once('include/topbar.php') ?>
  <!-- /.navbar -->

  <!-- Contenedor de la barra lateral principal -->

  <?php  include_once('include/lateralbar.php') ?>

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
                          <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">Ingresar Producto</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="" method="post" enctype="multipart/form-data">
                              <div class="card-body">                                  
                                <div class="form-group">
                                  <label>Nombre</label>
                                  <input type="text" class="form-control" name="nombre" value="<?php echo $producto['nombre'] ?>" placeholder="Nombre...">
                                </div>
                                <div class="form-group">
                                  <label>Descripción</label>
                                  <textarea type="text" class="form-control" name="descripcion" placeholder="Descripción..." ><?php echo $producto['descripcion'] ?></textarea>
                                </div>                            
                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input" value="true" name="activa" <?php echo ($producto['activa']==true)?'cheked':'' ?>>
                                  <label class="form-check-label" >Activo</label>
                                </div>
                                      </div>
                          <!-- /.card-body -->

                          <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </form>
                      </div>
                      <!-- /.card -->
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