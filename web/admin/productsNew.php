<?php
include_once('include/head.php');
include_once(DIR_BASE.'business/productsBusiness.php');
include_once(DIR_BASE.'business/trademarkBusiness.php');
include_once(DIR_BASE.'business/categoryTipoBusiness.php');
include_once(DIR_BASE.'business/categoryUvaBusiness.php');
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
                            <form>
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Nombre</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" placeholder="Nombre...">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Precio</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Precio...">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Contenido</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contenido...">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Cosecha</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Cosecha...">
                                </div>
                                <div class="form-group m-5">
                                  <label for="exampleInputPassword1">Categoría_Tipo: </label>
                                  <select name="Categoría_Tipo">
                                    <option value="">Categoría_Tipo</option>
                                  </select>
                                </div>
                                <div class="form-group m-5">
                                  <label for="exampleInputPassword1">Categoría Uva: </label>
                                  <select name="Categoría_Uva">
                                    <option value="">Categoría_Uva</option>
                                  </select>
                                </div>
                                <div class="form-group m-5">
                                  <label for="exampleInputPassword1">Marca: </label>
                                  <select name="Marca">
                                    <option value="">Marca</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Descripción</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Descripción...">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">ImagenLG</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="ImagenLG...">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">ImagenSM</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="ImagenSM...">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputFile">Activo Index</label>
                                  <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="exampleInputFile">
                                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                      <span class="input-group-text">Upload</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                  <label class="form-check-label" for="exampleCheck1">Activo</label>
                                </div>
                                      </div>
                          <!-- /.card-body -->

                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
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