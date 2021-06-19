<?php
include_once('include/head.php');
include_once(DIR_BASE.'business/productsBusiness.php');
include_once(DIR_BASE.'business/trademarkBusiness.php');
include_once(DIR_BASE.'business/categoryTipoBusiness.php');
include_once(DIR_BASE.'business/categoryUvaBusiness.php');

if (isset($_POST['submit'])) {
  if (!empty($_GET['edit'])) {
    businessModificarProducto($_POST,$_GET['edit']);
  }else {
    businessGuardarProductos($_POST);
  }
  redirect('productsList.php');
}

$producto = array(
  'nombre' => '',
  'precio' => '',
  'contenido' => '',
  'cosecha' => '',
  'categotiaTipo' => '',
  'categotiaUva' => '',
  'marca' => '',
  'descripcion' => '',
  'imagenLG' => '',
  'imagenSM' => '',
  'activa' => isset($datos['activa'])?'false':'true',
);

if (!empty($_GET['edit'])) {
  $producto = businessObtenerProducto($_GET['edit']);
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
                            <form action="" method="post" >
                              <div class="card-body">
                                <div class="form-group">
                                  <label>Nombre</label>
                                  <input type="text" class="form-control" name="nombre" value="<?php echo $producto['nombre'] ?>" placeholder="Nombre...">
                                </div>
                                <div class="form-group">
                                  <label>Precio</label>
                                  <input type="text" class="form-control" name="precio" value="<?php echo $producto['precio'] ?>" placeholder="Precio...">
                                </div>
                                <div class="form-group">
                                  <label>Contenido</label>
                                  <input type="text" class="form-control" name="contenido" value="<?php echo $producto['contenido'] ?>" placeholder="Contenido...">
                                </div>
                                <div class="form-group">
                                  <label>Cosecha</label>
                                  <input type="text" class="form-control" name="cosecha" value="<?php echo $producto['cosecha'] ?>" placeholder="Cosecha...">
                                </div>
                                <div class="form-group m-5">
                                  <label>Categoría Tipo: </label>
                                  <select name="categotiaTipo">
                                    <?php foreach (daoObtenerCategoriasTipo() as $catTipo) {?>
                                    <option value="<?php echo $catTipo['id'] ?>" <?php echo ($catTipo['id'] == $producto['categotiaTipo'])?'selected':'' ?>><?php echo $catTipo['nombre'] ?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                                <div class="form-group m-5">
                                  <label>Categoría Uva: </label>
                                  <select name="categotiaUva">
                                    <?php foreach (daoObtenerCategoriasUva() as $catUva) {?>
                                    <option value="<?php echo $catUva['id'] ?>" <?php echo ($catUva['id'] == $producto['categotiaUva'])?'selected':'' ?>><?php echo $catUva['nombre'] ?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                                <div class="form-group m-5">
                                  <label>Marcas: </label>
                                  <select name="marca">
                                    <?php foreach (daoObtenerMarcas() as $marca) {?>
                                    <option value="<?php echo $marca['id'] ?>" <?php echo ($marca['id'] == $producto['marca'])?'selected':'' ?>><?php echo $marca['Bodegas'] ?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label>Descripción</label>
                                  <textarea type="text" class="form-control" name="descripcion" placeholder="Descripción..." ><?php echo $producto['descripcion'] ?></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">ImagenLG</label>
                                  <input type="text" class="form-control" name="imagenLG" value="<?php echo $producto['imagenLG'] ?>" placeholder="ImagenLG...">
                                </div>
                                <div class="form-group">
                                  <label>ImagenSM</label>
                                  <input type="text" class="form-control" name="imagenSM" value="<?php echo $producto['imagenSM'] ?>" placeholder="ImagenSM...">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputFile">Subir Imagen</label>
                                  <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="">
                                      <label class="custom-file-label">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                      <span class="input-group-text">Upload</span>
                                    </div>
                                  </div>
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