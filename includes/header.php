<?php
  include('./database/db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turing IA</title>
    <link rel="stylesheet" href="./css/styles.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    
<header class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">  
    <div class="container">
        <a class="navbar-brand" href="index.php"><h1 class="text-uppercase fw-light">TURING-IA</h1></a>
        <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
          <i class="fa fa-navicon" style="color:#fff; font-size:28px;"></i>
          </span>
        </button>
        <div class="collapse navbar-collapse d-lg-flex justify-content-md-end" id="navbarNavAltMarkup">
          <div class="navbar-nav text-center">
            <a class="nav-link " aria-current="page" href="index.php">Inicio</a>
            <a class="nav-link " href="nosotros.php">Nosotros</a>
            <a class="nav-link " href="#">Servicios</a>
            <a class="nav-link " href="#">Tableau</a>
            <a class="nav-link " href="#">Portal</a>
            <a class="nav-link " href="blog.php">Blog</a>
            <a class="nav-link btnModal" href="#">Contacto</a>
          </div>
        </div>
      </div>
    </nav>
</header>