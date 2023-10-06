<?php
$title_name = 'Principal - EEST N°2 "Ing. Felipe Senillosa"'; // -- TITULO DE LA PAGINA EN EL NAVEGADOR
?>

<!DOCTYPE html>
<html lang="es" data-bs-theme="<?php if ($dark_mode) echo 'dark'; else echo 'light'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cantarell" />
    
    <!--link rel="stylesheet" href="http://localhost/sources/css/bootstrap.min.css"-->
    <link rel="stylesheet" href="http://localhost/www/sources/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    
    <script src="https://kit.fontawesome.com/e7401517de.js" crossorigin="anonymous"></script>
    <title><?php echo $title_name; ?></title>

</head>

<body>

    <!--Navbar-->

    <header class="header">
        <img class="bg-image" src="../www/sources/images/EESTN2.jpg" alt="">
        <nav class="navbar navbar-expand-lg p-4 fixed-top" id="menu">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><span>EEST Nº2</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#extendNav" aria-controls="extendNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse justify-content-end"" id="extendNav">
                    <ul class="navbar-nav mb-2 mb-lg-0 p-md-1">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="">Inicio</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Biblioteca</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Historia</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            Más
                        </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Anécdotas</a></li>
                                <li><a class="dropdown-item" href="#">FAQ</a></li>
                                <li><a class="dropdown-item" href="#">Documentos</a></li>
                                <li><a class="dropdown-item" href="#">Contactos</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>

        <!--Carousel de imagenes-->

       



        <!--Intro-->

        <section class="container-fluid d-flex flex-column justify-content-center align-items-center mt-5 pt-5 text-center w-75 m-auto border-top border-1" id="intro">
            <h1 class="p-3 fs-2 fw-bold">Lorem ipsum dolor sit amet</h1>
            <p class="p-3 fs-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin metus urna. Vestibulum luctus dui ante, quis auctor orci tempus eu. Praesent posuere ex at massa volutpat, sed lacinia justo auctor. Sed erat leo, iaculis eu ligula id, viverra
                pellentesque lorem. Suspendisse finibus mi libero. Donec vel urna ut tellus eleifend feugiat. Praesent dapibus enim odio, a vulputate ante elementum a. Duis mollis efficitur justo, nec aliquet turpis lacinia in.
            </p>
            <a href="#" class="btn btn-primary btn-lg btn-block">Más informacion</a>
        </section>

        <!--Preview-->

        <section class="container-fluid mt-5 border-top border-1">
            <div class="row w-75 mx-auto mt-5 my-5 preview">
                <div class="row mt-5 d-flex">
                    <div class="col-md-12 col-xs-12 col-lg-5">
                        <img src="https://3.bp.blogspot.com/-Jig2u0pBUPU/T8UQ7VuqdyI/AAAAAAAAAIY/IAkgeZoA2-0/s1600/EEST2.jpg" alt="Prueba" width="100%" height="auto"></div>
                    <div class="col-md-12 col-lg-7 d-flex">
                        <p class="fs-4 p-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin metus urna. Vestibulum luctus dui ante, quis auctor orci tempus eu. Praesent posuere ex at massa volutpat, sed lacinia justo auctor. Sed erat leo, iaculis eu ligula id, viverra
                            pellentesque lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin metus urna. Vestibulum luctus dui ante, quis auctor orci tempus eu. Praesent posuere ex at massa volutpat, sed lacinia justo auctor.
                            Sed erat leo, iaculis eu ligula id, viverra pellentesque lorem.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin metus urna.
                        </p>
                    </div>
                </div>
                <div class="row mt-5 d-flex">
                    <div class="col-md-12 col-lg-7 d-flex">
                        <p class="fs-4 p-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin metus urna. Vestibulum luctus dui ante, quis auctor orci tempus eu. Praesent posuere ex at massa volutpat, sed lacinia justo auctor. Sed erat leo, iaculis eu ligula id, viverra
                            pellentesque lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin metus urna. Vestibulum luctus dui ante, quis auctor orci tempus eu. Praesent posuere ex at massa volutpat, sed lacinia justo auctor.
                            Sed erat leo, iaculis eu ligula id, viverra pellentesque lorem.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin metus urna.
                        </p>
                    </div>
                    <div class="col-md-12 col-xs-12 col-lg-5">
                        <img src="https://3.bp.blogspot.com/-Jig2u0pBUPU/T8UQ7VuqdyI/AAAAAAAAAIY/IAkgeZoA2-0/s1600/EEST2.jpg" class="img-fluid" alt="Prueba" width="100%" height="auto">
                    </div>
                </div>
            </div>
        </section>

        <!--Cursos-->

        <section class="container-fluid mt-5 border-top border-1 text-center">
            <h1 class="p-2 fs-2 mt-5 mx-auto fw-bold">Cursos</h1>
            <div class="row w-75 mx-auto mt-5 my-5">
                <div class="col-xs-12 col-sm-12 col-lg-4">
                    <div class="thumbnail"> <img data-src="holder.js/100%x200" alt="100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU1MTZiYmYyNGUgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTUxNmJiZjI0ZSI+PHJlY3Qgd2lkdGg9IjI0MiIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI4OS44NTkzNzUiIHk9IjEwNS4xIj4yNDJ4MjAwPC90ZXh0PjwvZz48L2c+PC9zdmc+"
                            data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
                        <div class="caption mt-1">
                            <h3 class="fw-bold">Lorem ipsum</h3>
                            <p class="fs-5"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin metus urna. Vestibulum luctus dui ante, quis auctor orci tempus eu. Praesent posuere ex at massa volutpat, sed lacinia justo auctor. Sed erat leo, iaculis
                                eu ligula id, viverra pellentesque lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin metus urna. Vestibulum luctus dui ante, quis auctor orci tempus eu. Praesent posuere ex at massa volutpat,
                                sed lacinia justo auctor. Sed erat leo, iaculis eu ligula id, viverra pellentesque lorem.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin metus urna.</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-4">
                    <div class="thumbnail"> <img data-src="holder.js/100%x200" alt="100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU1MTZiYmVlYzkgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTUxNmJiZWVjOSI+PHJlY3Qgd2lkdGg9IjI0MiIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI4OS44NTkzNzUiIHk9IjEwNS4xIj4yNDJ4MjAwPC90ZXh0PjwvZz48L2c+PC9zdmc+"
                            data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
                        <div class="caption mt-1">
                            <h3 class="fw-bold">Lorem ipsum</h3>
                            <p class="fs-5"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin metus urna. Vestibulum luctus dui ante, quis auctor orci tempus eu. Praesent posuere ex at massa volutpat, sed lacinia justo auctor. Sed erat leo, iaculis
                                eu ligula id, viverra pellentesque lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin metus urna. Vestibulum luctus dui ante, quis auctor orci tempus eu. Praesent posuere ex at massa volutpat,
                                sed lacinia justo auctor. Sed erat leo, iaculis eu ligula id, viverra pellentesque lorem.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin metus urna.</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-4">
                    <div class="thumbnail"> <img data-src="holder.js/100%x200" alt="100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU1MTZiYmVlYzkgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTUxNmJiZWVjOSI+PHJlY3Qgd2lkdGg9IjI0MiIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI4OS44NTkzNzUiIHk9IjEwNS4xIj4yNDJ4MjAwPC90ZXh0PjwvZz48L2c+PC9zdmc+"
                            data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
                        <div class="caption mt-1">
                            <h3 class="fw-bold">Lorem ipsum</h3>
                            <p class="fs-5"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin metus urna. Vestibulum luctus dui ante, quis auctor orci tempus eu. Praesent posuere ex at massa volutpat, sed lacinia justo auctor. Sed erat leo, iaculis
                                eu ligula id, viverra pellentesque lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin metus urna. Vestibulum luctus dui ante, quis auctor orci tempus eu. Praesent posuere ex at massa volutpat,
                                sed lacinia justo auctor. Sed erat leo, iaculis eu ligula id, viverra pellentesque lorem.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin metus urna.</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="w-100 d-flex align-items justify-content-center">
            <p class="fs-5 px-3 pt-3">
                EEST N°2 Ing. "Felipe Senillosa"
            </p>
            <div class="" id="iconos">
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
            </div>
        </footer>

          

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--script src="http://localhost/sources/js/bootstrap.bundle.js"></script-->
    
    <script>
        const newElement = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
    if (window.scrollY > 80){
        newElement.classList.add('nav-scrolled');
    }else if (window.scrollY <= 80){
        newElement.classList.remove('nav-scrolled');
    }
})
    </script>
</body>

</html>