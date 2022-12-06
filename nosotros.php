<?php 
    include("includes/header.php");
?>


<div class="container_home">
    <div class="container_video">
        <video autoplay muted loop>
            <source  src="./videos/Nosotros(1).mp4" type="video/mp4">
        </video>
    </div>

    <div class="container_home_content"">
        <div class=" container">
        <div class="row">
            <div class="col-3">
                <!-- Se requiere para activar un mensaje cuando se envia datos desde el form -->
                <?php  if(isset($_SESSION['message'])) { ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php session_unset(); } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-lg-start  fw-bolder display-3">Nosotros</h1>
                <p class="h3 text-center text-lg-start fw-bolder">
                    Somos especialistas en<br>Proyectos de Business <b>Analytics</p>
            </div>
        </div>
       
    </div>
</div>
</div>
<div class="container-fluid">
    <img class="w-100" src="./img/color-bar-w-blue-3010x50.png" alt="bar-color">
</div>
