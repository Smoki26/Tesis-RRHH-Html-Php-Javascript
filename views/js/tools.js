let first_part = document.getElementById("encabezado");
let second_part = document.getElementById("sidebar");
let thirt_part = document.getElementById("footer")

let Encabezado= `<nav class="main-header navbar navbar-expand navbar-white navbar-light">
<!-- Left navbar links -->
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
  </li>
  <li class="nav-item d-none d-sm-inline-block">
    <a href="index.html" class="nav-link">Home</a>
  </li>

</ul>

<!-- Right navbar links -->
<ul class="navbar-nav ml-auto">
  <!-- Navbar Search -->
  <li class="nav-item">
    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
      <i class="fas fa-search"></i>
    </a>
    <div class="navbar-search-block">
      <form class="form-inline">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </li>


  <!-- Full Screen -->
  
  <li class="nav-item">
    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
      <i class="fas fa-expand-arrows-alt"></i>
    </a>
  </li>
  
</ul>
</nav>`;

let Sidebar = `<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="../views/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Sistema RRHH</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../views/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Adminstrador</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
             <li class="nav-item">
            <a src="../index.php"><button type="button" class="nav-link" routerLink="/login">
            
              <i class="left nav-icon fas fa-sign-out-alt"></i>
              <p>Salir</p>
            </button></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Sistema
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="Usuarios_controll.php" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Usuarios</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="Rol_Use_controll.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Roles de usuarios</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="Modulo_controll.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Modulos</p>
              </a>
            </li>
          </ul>
        </li>
        
        <!--Tabla de referencias-->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Tablas referencias
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="Personas_controll.php" class="nav-link active">
              <!--<a href="../Tablas_Ref/Personas.php" class="nav-link active">-->
              
                <i class="far fa-circle nav-icon"></i>
                <p>Personas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="Puestos_controll.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Puestos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="Calificacion_controll.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Calificaciones</p>
              </a>
            </li>
          </ul>
        </li>

        <!--Tabla de Informes-->
        <li class="nav-item">
          <a href="#" class="nav-link ">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              informes
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="Info_Pers_controll.php" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Informes Personas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Puestos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Habilidades</p>
              </a>
            </li>
          </ul>
        </li>
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>`;

let Footer = ` <!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
  <div class="p-3">
    <h5>Title</h5>
    <p>Sidebar content</p>
  </div>
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
  <!-- To the right -->
  <div class="float-right d-none d-sm-inline">
    Anything you want
  </div>
  <!-- Default to the left -->
  <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>`;

first_part.innerHTML = Encabezado;
second_part.innerHTML = Sidebar;
thirt_part.innerHTML = Footer;