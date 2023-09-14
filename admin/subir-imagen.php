<?php


    $title_name = "Carga de Imagenes";
    include "../includes/head_settings.php";
?>
<body class="container">
    <header></header>
    <main class="row justify-content-center">
    <div class="col-12 col-sm-10">
        <div class="row justify-content-center  py-3">           <!-- Insert de imagenes (multiple) -->
            <form action="" class="row" method="post" enctype="multipart/form-data" name="fileUpload">
              <div class="col-10">
               <input  class="form-control" type="file" name="fotos[]" id="fotos" multiple required>
                </div>
                <!-- <button id="upload-button" onclick="uploadFile()"> Upload </button> -->
                <div class="col-2">
                    <input  class="btn btn-primary" type="submit" value="submit">
                </div>
            </form>
        </div>
        <div class="row justify-content-center" id="Display">  <!-- Cards de subida (muestra las insertadas y el formulario de propiedades.) -->

        </div>
    </div>

</main>

    <script src="../sources/jquery.js"></script>
    <script src="script/script.js"></script>



<?php include "../includes/footer.php"; ?>