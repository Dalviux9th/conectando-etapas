<?php


    $title_name = "Carga de Imagenes";
    include "includes/head_settings.php";
?>
<span class="d-none">

    <form action="" method="post" enctype="multipart/form-data" name="fileUpload">
        <input  class="d-none" type="file" name="fotos[]" id="fotos" multiple required>
    </form>

</span>

    <!-- Modal. Muestra la ayuda (tutorial) -->
    <div class="modal fade" id="helpModal" tabindex="-1" aria-labelledby="helpModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border-0">
                <img class="w-100 rounded-2" src="http://localhost/admin/uploads/PRE-20231005151806632918.jpg" alt="" srcset="">
                <button type="button" class="position-absolute top-0 end-0 btn btn-light rounded-5 m-1" data-bs-dismiss="modal">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
        </div>
    </div>


    <main class="row justify-content-center mb-5">

    <div class="col-10">

        <div class="row justify-content-center my-3" id="StateDisplay"></div>

        <span class="row justify-content-between sticky-top pt-3 mb-3 pb-1">
            <h3 class="col-9 col-sm-auto">
                Imágenes precargadas
                <i id="InfoSubida" class="fs-6 text-secondary fa-regular fa-circle-question" data-bs-toggle="modal" data-bs-target="#helpModal"></i>
            </h3>
            <span class="col-3 col-sm-auto">
                <label for="fotos" id="btnUpload" class="btn position-absolute bottom-0 end-0">
                    <i class="fs-2 text-primary fa-solid fa-cloud-arrow-up"></i>
                </label>
            </span>
            <hr class="mt-1 mb-0">
        </span>

        <div class="row justify-content-center px-2" id="Display"></div><!-- Cards de subida (muestra las insertadas y el formulario de propiedades.)-->

        <div class="emptyPlaceholder">
            <div class="row justify-content-around">
                <img class="col-6 col-sm-4 h-100" src="./sources/images/no-results_Placeholder.png" alt="404. No encontrado">
                <div class="col-12 text-center">
                    <h3>Aún no cargaste nada.</h3>
                    <p>Para subir imágenes nuevas, primero deben ser 'pre-cargadas'.<br> Empiece por subirlas con el botón <i class="fa-solid fa-cloud-arrow-up"></i></p>
                </div>
            </div>
        </div>


    </div>

</main>


<?php include "includes/footer.php"; ?>