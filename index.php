<?php 
    include("includes/header.php");
?>
<div class="container_home">
    <div class="container_video">
        <video autoplay muted loop>
            <source src="./videos/Index.m4v" type="video/mp4">
        </video>
    </div>

    <div class="container_home_content"">
        <div class=" container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-lg-start  fw-bolder display-3">Bienvenido</h1>
                <p class="h3 text-center text-lg-start fw-bolder">Hacemos los datos <br>fáciles de usar</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <p class="h4 text-center text-lg-start ">Ponte en contacto con un especialiasta</p>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <button id="btnModal" type="button" class="btn btn-outline-light rounded-0 ">
                        Más Información
                    </button>
                </div>

                <?php 
                    include("includes/modal.php");
                ?>

            </div>
        </div>
    </div>
</div>
</div>

<div class="bar_color"></div>

<div class="container-fluid">
    <img width="100%" src="./img/color-bar-w-blue-3010x50.png" alt="bar-color">
</div>

<section class="container mt-5">
    <article class="row">
        <div class="col-12">
            <h2 class="text-uppercase">Que Realizamos</h2>
            <p>Contribuimos con su empresa para mejorar la toma de
                decisiones a través de sus datos. </p>

            <button type="button" class="btn btn-outline-primary rounded-0 p-3">
                Más Información
            </button>
        </div>
    </article>

    <article>
        <!-- carrusel de contenido -->
    </article>

    <article class="row text-center">

        <div class="row text-center mt-4 mb-2">
            <div class="col-12">
                <h2 class="text-uppercase">Tecnologias que utilizamos</h2>
            </div>
        </div>

        <div class="col-12 col-lg-3">
            <img class="img-fluid" width="150px" src="img/tecnoly-tableau.png" alt="tableu">
        </div>
        <div class="col-12 col-lg-3">
            <img class="img-fluid" width="150px" src="img/salesforce.jpg" alt="salesforce">
        </div>
        <div class="col-12 col-lg-3">
            <img class="img-fluid" width="150px" src="img/pmi2.png" alt="project managment">
        </div>
        <div class="col-12 col-lg-3">
            <img class="img-fluid" width="150px" src="img/scrum.png" alt="scrum">
        </div>
    </article>


</section>


<?php 
    include("includes/footer.php");
?>