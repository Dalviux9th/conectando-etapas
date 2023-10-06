<?php


    $title_name = "Carga de Imagenes";
    include "includes/head_settings.php";
?>
    <form action="" method="post" enctype="multipart/form-data" name="fileUpload">
        <input  class="d-none" type="file" name="fotos[]" id="fotos" multiple required>
    </form>

<!-- Modal. Muestra la ayuda (tutorial) -->
<div class="modal fade" id="helpModal" tabindex="-1" aria-labelledby="helpModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="helpModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <main class="row justify-content-center">

    <div class="col-12 col-sm-10">

        <div class="row justify-content-center my-3" id="StateDisplay"></div>

        <span class="row justify-content-between sticky-top pt-3 mb-3 pb-1">
            <h3 class="col-auto">
                Imágenes precargadas
                <i id="InfoSubida" class="fs-6 text-secondary fa-regular fa-circle-question" data-bs-toggle="modal" data-bs-target="#helpModal"></i>
            </h3>
            <label for="fotos" id="btnUpload" class="btn col-auto">
                <i class="fs-2 text-primary fa-solid fa-cloud-arrow-up"></i>
            </label>
            <hr class="mt-1 mb-0">
        </span>

        <div class="row justify-content-center px-2" id="Display"></div><!-- Cards de subida (muestra las insertadas y el formulario de propiedades.)-->

        <div class="emptyPlaceholder">
            hola, esto ta vacío che..
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis ipsum natus aspernatur soluta rerum velit odit consequuntur explicabo voluptates nisi esse porro eos earum ea aperiam ducimus, quo sunt! Reprehenderit!
        </div>


    </div>

</main>


<?php include "includes/footer.php"; ?>