<?php
$title_name = 'Principal - EEST N°2 "Ing. Felipe Senillosa"'; // -- TITULO DE LA PAGINA EN EL NAVEGADOR
include "includes/head_settings.php";
?>

    <main>

        <!--Carousel de imagenes-->

        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://3.bp.blogspot.com/-Jig2u0pBUPU/T8UQ7VuqdyI/AAAAAAAAAIY/IAkgeZoA2-0/s1600/EEST2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://3.bp.blogspot.com/-Jig2u0pBUPU/T8UQ7VuqdyI/AAAAAAAAAIY/IAkgeZoA2-0/s1600/EEST2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://3.bp.blogspot.com/-Jig2u0pBUPU/T8UQ7VuqdyI/AAAAAAAAAIY/IAkgeZoA2-0/s1600/EEST2.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
        </div>



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

<?php
include "includes/footer.php";
?>