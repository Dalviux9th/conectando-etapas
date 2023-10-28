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
    
    
    <title>FAQ - EEST N°2 "Ing. Felipe Senillosa"</title>

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
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="./index.php">Inicio</a></li>
                        <li class="nav-item" ><a class="nav-link active" href="./anecdotasFront.php">Anécdotas</a></li>
                        <li class="nav-item" ><a class="nav-link active" href="./Front.php">Galería</a></li>
                        <li class="nav-item" ><a class="nav-link active" href="./historyFront.php">Historia</a></li>
                        <li class="nav-item" ><a class="nav-link active" href="./basicFront.php">Ciclo Básico</a></li>
                        <li class="nav-item" ><a class="nav-link active" href="./superiorFront.php">Ciclo Superior</a></li>
                        <li class="nav-item dropdown-center">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                Más información
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./docsFront.php">Documentos</a></li>
                                <li><a class="dropdown-item" href="./FAQ.php">FAQ</a></li>
                                <li><a class="dropdown-item" href="./conEtFront.php">Conectando Etapas</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    

    <main class="container-fluid">
        <div class="row m-5">
            <div class="col-8">
                <div class="card">
                    <div class="card-header"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit ipsum? </div>
                    <div class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Sapiente aliquid dignissimos similique saepe eligendi harum tempora nobis molestiae provident voluptatum doloremque,
                         laudantium explicabo sit accusamus quod, nisi esse perspiciatis? Labore.
                    </div>
                </div>
                <div class="card">    
                    <div class="card-header"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit ipsum? </div>
                    <div class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Sapiente aliquid dignissimos similique saepe eligendi harum tempora nobis molestiae provident voluptatum doloremque,
                        laudantium explicabo sit accusamus quod, nisi esse perspiciatis? Labore.
                    </div>
                </div>   
                <div class="card">    
                    <div class="card-header"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit ipsum? </div>
                    <div class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Sapiente aliquid dignissimos similique saepe eligendi harum tempora nobis molestiae provident voluptatum doloremque,
                        laudantium explicabo sit accusamus quod, nisi esse perspiciatis? Labore.
                    </div>
                </div>
            </div>
            <div class="col-4">
                <form action="enviar_consulta.php" method="post">
                    <div class="mb-2">
                        <div class="card">
                            <div class="card-header">¿Tiene alguna consulta? escribenos y te responderomos lo mas pronto posible</div>
                            <div class="card-body">
                                <div class="mb-2">
                                    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre" name ="Nombre"required>
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlInput2" class="form-label">Direccion de email</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com" name="Email" required>
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Consulta</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Consulta" required></textarea>
                                </div>
                                <div class="mb-2">
                                    <button type="submit" class="btn btn-primary" name="Envio">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="http://localhost/www/sources/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="http://localhost/www/sources/js/bootstrap.bundle.js"></script>



    </body>
</html>