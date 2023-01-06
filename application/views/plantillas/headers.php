<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MotoRepuestos</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  

  <!-- Favicons -->
  <link href="../../assets/img/favicon.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  
  <link href="//assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="//assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="//assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="//assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="//assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="//assets/vendor/simple-datatables/style.css" rel="stylesheet">

<!-- Template Main CSS File -->

  <?php echo link_tag('assets/css/style.css')?>
  <?php echo link_tag('assets/img/favicon.png')?>
  <?php echo link_tag('assets/img/apple-touch-icon.png')?>

  <?php echo link_tag('assets/vendor/bootstrap-icons/bootstrap-icons.css')?>

  <?php echo link_tag('assets/vendor/boxicons/css/boxicons.min.css')?>

  <?php echo link_tag('assets/vendor/quill/quill.snow.css')?>

  <?php echo link_tag('assets/vendor/quill/quill.bubble.css')?>

  <?php echo link_tag('assets/vendor/remixicon/remixicon.css')?>

  <?php echo link_tag('assets/vendor/simple-datatables/style.css')?>
  <?php echo link_tag('assets/vendor/bootstrap/css/bootstrap.min.css')?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</head>

<body>






<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="/motorepuestosCI/index.php/inicio" class="logo d-flex align-items-center">      
      <?php echo img('assets/img/logo.png');?>
      <span class="d-none d-lg-block">Moto Repuestos</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->



  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
         
          <?php 
              if(!$this->session->has_userdata('idEmpleado')){
                echo '<a style="text-decoration:none; color:darkviolet;" href="/motorepuestosCI/index.php/login">Iniciar Sesion</a>';
              }else{
                echo '<span class="d-none d-md-block dropdown-toggle ps-2"> '.$this->session->userdata('nombre').'</span>';
              
              ?>  
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6><?php echo $this->session->userdata('nombre')?></h6>
            <span><?php echo $this->session->userdata('correo')?></span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          
          <li>
            <hr class="dropdown-divider">
          </li>
          
          <li>
            <a class="dropdown-item d-flex align-items-center"  href="<?php echo base_url('/logout') ?>">
              <i class="bi bi-box-arrow-right"></i>
              <span>Sign Out</span>
            </a>
          </li>

        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav><!-- End Icons Navigation -->

</header><!-- End Header -->


  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">



      <li class="nav-item">
        <a class="nav-link collapsed" href="/motorepuestosCI/inicio">
        <i class="bi bi-house"></i>
          <span>Inicio</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/motorepuestosCI/categoria">
          <i class="bi bi-grid"></i>
          <span>Categorias</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/motorepuestosCI/articulo">
          <i class="bi bi-bag"></i>
          <span>Articulos</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/motorepuestosCI/empleado">
          <i class="ri-user-settings-line"></i>
          <span>Empleados</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/motorepuestosCI/cliente">
          <i class="bi bi-people"></i>
          <span>Clientes</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/motorepuestosCI/proveedor">
          <i class="ri-hand-coin-line"></i>
          <span>Proveedores</span>
        </a>
      </li><!-- End Login Page Nav -->

      

    </ul>

  </aside><!-- End Sidebar-->

<?php }?>