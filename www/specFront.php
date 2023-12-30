<!DOCTYPE html>
<html lang="es" data-bs-theme="<?php if ($dark_mode) echo 'dark'; else echo 'light'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cantarell" />
    
    <link rel="stylesheet" href="http://localhost/www/sources/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/www/sources/main_config.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="http://localhost/www/sources/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    
    <script src="https://kit.fontawesome.com/e7401517de.js" crossorigin="anonymous"></script>
    <title>[Especialización] - EEST N°2 "Ing. Felipe Senillosa"</title>

</head>

<body>

<header class="header">
        <nav class="navbar navbar-expand-lg p-4 fixed-top" id="menu">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php"><span>EEST Nº2</span><img src="sources/images/logo_trans.png" alt="" class="img-header"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#extendNav" aria-controls="extendNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="extendNav">
                    <ul class="navbar-nav mb-2 mb-lg-0 p-md-1">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="./index.php">Inicio</a></li>
                        <li class="nav-item" ><a class="nav-link" href="./anecdotasFront.php">Anécdotas</a></li>
                        <li class="nav-item" ><a class="nav-link" href="./galeryFront.php">Galería</a></li>
                        <li class="nav-item" ><a class="nav-link" href="./historyFront.php">Historia</a></li>
                        <li class="nav-item" ><a class="nav-link" href="./basicFront.php">Ciclo Básico</a></li>
                        <li class="nav-item" ><a class="nav-link" href="./cicloSuperior.php">Ciclo Superior</a></li>
                        <li class="nav-item dropdown-center">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                Más información
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./docsFront.php">Documentos</a></li>
                                <li><a class="dropdown-item" href="./FAQ.php">Preguntas Frecuentes</a></li>                                <!---  <li><a class="dropdown-item" href="./conEtFront.php">Conectando Etapas</a></li> -->
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    
    <!--[cambia teniendo en cuenta la especialización] -->

    
    

    <main class="container-fluid">
        <div class="image-container">
            <img src="./imagenes/informatica3Cortado.jpg" alt="" class="img-fluid img-spec ">
            <h1 class="text-center text-white overlay-text">[Especialización]</h1>

        </div>
        <section>
        <div class="row his-cont mt-5 mb-3">
            <div class="col-12 col-md-8">
                <h1 class="text-center">Explicación</h1>
                <p class="fs-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum cumque laboriosam nostrum soluta? Odit, dolore repudiandae accusamus dolor molestias sit cumque fuga nisi in perferendis dignissimos. Aspernatur id temporibus aut corporis molestias quas corrupti esse, quod excepturi ullam. Quaerat eaque earum beatae labore nihil quos enim reiciendis rerum facere, iusto deserunt sint nostrum expedita cupiditate natus hic aspernatur maiores numquam?</p>
            </div>
            <div class="col-12 col-md-3 offset-1">
                <h1 class="text-center">Proyectos</h1>
                <p class="fs-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia harum quisquam porro cumque repellendus laudantium odio ab aliquid sequi impedit possimus sed quia perspiciatis temporibus dolore, maiores saepe, laboriosam culpa?</p>
            </div>
        </div>
        </section>


        <!--"Rincón de egresados" dependiendo de la especialización contando como les fue-->

        <div class="row justify-content-center text-center">
            <div class="row">
                <!--Imágenes de nuestros egresados -->
                <div class="col-4">
                    <img src="./sources/images/logo_trans.png" alt="" class="img-rinEgre rounded-5">
                </div>
                <div class="col-4">
                    <img src="./sources/images/logo_trans.png" alt="" class="img-rinEgre rounded-5">
                </div>
                <div class="col-4">
                    <img src="./sources/images/logo_trans.png" alt="" class="img-rinEgre rounded-5">
                </div>
            </div>
            <div class="col-4"><em class="fw-medium">"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi, quia tempore quas fugit nisi odit debitis consequuntur doloribus aut cum."</em></div>
            <div class="col-4"><em class="fw-medium">"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi, quia tempore quas fugit nisi odit debitis consequuntur doloribus aut cum."</em></div>
            <div class="col-4"><em class="fw-medium">"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi, quia tempore quas fugit nisi odit debitis consequuntur doloribus aut cum."</em></div>
        </div>

    </main>


    <div class="container-fluid" id="footer">
        <div class="row text-center fs-5" id="footer">
            <div class="col-12 mb-0 pt-0">
                EEST N°2 "Ing. Felipe Senillosa"
            </div>
            <div class="col-12">
                <small>
                    Email: eestn2tandil@abc.gob.ar
                </small>
            </div>
            <div class="col-12">
                <small>
                    Teléfono: 0249 - 4442637/33 
                    Leando Alem 285
                </small>
            </div>
            <div class="col-12 ">
                <small id="iconos">
                <a href="https://www.instagram.com/la.senillosa.eestn2.tandil/"><i class="bi bi-instagram"></i></a>
                <a href="https://www.facebook.com/felipe.senillosa.9?locale=es_LA"><i class="bi bi-facebook"></i></a>
                </small>
            </div>
        </div>
    </div>


    <script src="https://kit.fontawesome.com/5b34b9778f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="http://localhost/www/sources/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="http://localhost/www/sources/js/bootstrap.bundle.js"></script>
    
</body>
</html>