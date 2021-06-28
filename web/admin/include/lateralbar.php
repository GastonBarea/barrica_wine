
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Logotipo -->
    <a href="#" class="brand-link">
      <img src="<?php echo URL_BASE.'img/bwmin.png'?>" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Barrica Wine</span>
    </a>
    <!-- Barra lateral -->
    <div class="sidebar">
      <!-- Barra lateral panel de Usuario -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo URL_BASE.'img/bwmin.png'?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>
      <!-- Barra lateral menú -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!--Agregue iconos a los enlaces usando la clase .nav-icon con font-awesome o cualquier otra biblioteca de fuentes de iconos -->
          <li class="nav-item">
            <a href="index.php" class="nav-link <?php echo ($seccion=='index')?'active':''; ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>Home</p>
            </a>
          </li>
        <li class="nav-item">
            <a href="productsList.php" class="nav-link <?php echo ($seccion=='productsList')?'active':''; ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>Productos</p>
            </a>
          </li>
        <li class="nav-item">
            <a href="marcasList.php" class="nav-link <?php echo ($seccion=='marcasList')?'active':''; ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>Categorias Marcas</p>
            </a>
          </li>
            <li class="nav-item">
            <a href="tiposList.php" class="nav-link <?php echo ($seccion=='tiposList')?'active':''; ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>Categoría Típos</p>
            </a>
          </li>
            <li class="nav-item">
            <a href="uvasList.php" class="nav-link <?php echo ($seccion=='uvasList')?'active':''; ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>Categoría Uvas</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="comentariosList.php" class="nav-link <?php echo ($seccion=='comentariosList')?'active':''; ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>Comentarios</p>
            </a>
          </li>          
        </ul>
      </nav>
      <!-- /.Barra lateral Menú -->
    </div>
    <!-- /.Barra lateral -->
  </aside>