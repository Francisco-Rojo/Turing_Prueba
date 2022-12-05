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
                <h1 class="text-center text-lg-start  fw-bolder display-3">Bienvenido</h1>
                <p class="h3 text-center text-lg-start fw-bolder">Hacemos los datos <br>fáciles de usar</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <p class="h4 text-center text-lg-start ">Ponte en contacto con un especialiasta</p>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <button class="btnModal btn btn-outline-light rounded-0 ">
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
            <div class="d-flex justify-content-center justify-content-lg-start">

                <button type="button" class="btn btn-outline-primary rounded-0 p-3">
                    Más Información
                </button>
            </div>
        </div>
    </article>

    <article class="row mt-5">
        <div class="col-12 col-lg-4">
            <div class="ms-5"
                style="background-color: #495057; border-radius: 50%; width: 250px; height: 250px; display: flex; align-items: center; justify-content: center;">
                <p style="color:white">Video</p>
            </div>
        </div>
        <div class="col-12 col-lg-4 mt-3 mt-lg-5">
            <p class="text-primary ">
                LA MANERA IDEAL PARA MANEJAR TUS DATOS</p>
            <p class="fs-4  fw-bolder">Somos el socio estratégico que necesitas para potenciar los datos de tu
                organización. </p>
            <p>Contamos con más de 15 años de experiencia brindando soluciones innovadoras, adaptadas a las necesidades
                de nuestros clientes, en más de 10 industrias y diferentes áreas funcionales.</p>
            <div class="d-flex justify-content-center justify-content-lg-start">
                <button type="button" class="btn btn-outline-primary rounded-0 p-3 mb-5 mb-lg-1">
                    Más Información
                </button>
            </div>
        </div>
        <div class="col-12 col-lg-4 d-flex align-items-center">
            <img src="./img/cer-pmi.jpg" class="img-fluid rounded-pill " alt="cer-pmi">

        </div>
    </article>


    <!-- carrusel de contenido -->
    <article class="my-5">

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/balog.jpg" class="d-block w-100 img-thumbnail" alt="...">
                    <div class="carousel-caption ">
                        <div style="padding:30px; background-color: rgba(0, 0, 0, 0.5);">
                            <h6>Implementación de Proyectos (Business Analyst)</h6>
                            <p class="d-none d-md-block">Nuestra metodología de servicios se encuentra orientada en los
                                estándares del Project Management Institute (PMI) ® e International
                                Project Management Association (IPMA). Esto nos permite contar con las
                                competencias para coordinar equipos de trabajo en el inicio, planeación,
                                construcción, monitoreo y control de las actividades y recursos
                                involucrados en un proyecto a partir de los objetivos y requerimientos de
                                nuestro cliente.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./img/code.jpg" class="d-block w-100 img-thumbnail" alt="...">
                    <div class="carousel-caption">
                        <div style="padding:30px; background-color: rgba(0, 0, 0, 0.5);">

                            <h6>Desarrollo de Aplicaciones</h6>
                            <p class="d-none d-md-block">En un mundo moderno, con la cantidad de problemas y su
                                complejidad
                                cada vez es mayor, el desarrollo de aplicaciones, una herramienta
                                para obtener soluciones precisas, dándole tareas repetitivas a la
                                computadora y logrando así la "automatización" de procesos que
                                todavía requieren la intervención de las personas en tareas repetitivas.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./img/vsoft.jpg" class="d-block w-100 img-thumbnail" alt="...">
                    <div class="carousel-caption">
                        <div style="padding:30px; background-color: rgba(0, 0, 0, 0.5);">

                            <h6>Capacitación</h6>
                            <p class="d-none d-md-block">Nuestra gama de cursos de Tableau incluye: Tableau Prep Tableau
                                Desktop Visual Analytics
                                Tableau Server
                                Adicionalmente ofrecemos cursos sobre: Business Intelligence, Data Mining, Big Data,
                                Data to Insight.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </article>




    <article class="row mt-5 ">
        <div class="row text-center">
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


    <!-- historias de los clientes -->


    <div class="row p-4">
        <div class="col-12 col-lg-6">
            <p class="display-4 text-center text-lg-start">Tu futuro empieza ahora. ¿Estás Listo? </p>
        </div>
        <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
            <button type="button" class="btnModal btn btn-outline-primary rounded-0 p-3">
                Contactanos !
            </button>

        </div>

        </article>


</section>


<?php 
    include("includes/footer.php");
?>