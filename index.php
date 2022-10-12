<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="views/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
  


        
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <div class="mb-md-5 mt-md-4 pb-5">
  
                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                <p class="text-white-50 mb-5">Ingrese su usuario y conttraseña</p>
  
                <div class="form-outline form-white mb-4">
                  <input type="text" id="usuario" class="form-control form-control-lg" />
                  <label class="form-label" for="usuario">Usuario</label>
                </div>
  
                <div class="form-outline form-white mb-4">
                  <input type="password" id="password" class="form-control form-control-lg" />
                  <label class="form-label" for="password">Contraseña</label>
                </div>

                <a href="controllers/Usuarios_controll.php"><button class="btn btn-outline-light btn-lg px-5" (click)="onLoginClick()">Login</button></a>
  

  
              </div>

  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

      
    <!-- /.content-header -->
  
    <!-- /.content -->
  
  </div>
  <!-- ./wrapper -->
  
  <!-- REQUIRED SCRIPTS -->
  
  <!-- jQuery -->
  <script src="views/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="views/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="views/dist/js/adminlte.min.js"></script>
  
<script src="views/js/tools.js"></script>
</body>
</html>
