

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= \Config\App::NAME ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/test2.css">

  <link rel="stylesheet" href="dist/css/test.css">

  <link rel="stylesheet" href="dist/css/search.css">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



</head>
<body class="hold-transition layout-top-nav">



<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="/" class="navbar-brand">
        <img src="img/SAYNA_Logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
      <a href='.?controller=Vols&action=index' class='leftLink'>Vols</a>

      <a href='.?controller=Pays&action=index' class='leftLink'>Pays</a>

      <a href='.?controller=Aeroports&action=index' class='leftLink'>Aeroports</a>

      



        <!-- SEARCH FORM -->
      
       
      </div>

      <!-- Right navbar links -->
     


      
      
    </div>
    <div class="user-menu" id='user'>
    <button class="user-btn">
        <i class="fas fa-user"></i> Mon compte
        <i class="fas fa-chevron-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="#">Mon profil</a>
        <a href="#">Paramètres</a>
        <a href=".?controller=Authentif&action=logout">Déconnexion</a>
    </div>
</div>


  </nav>
 
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> <?= \Config\App::NAME ?> </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
           
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">