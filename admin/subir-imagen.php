<?php


    $title_name = "Carga de Imagenes";
    include "../includes/head_settings.php";
?>
<body class="container">
    <header></header>

    <div class="col-12 col-sm-10">
        <div class="row">           <!-- Insert de imagenes (multiple) -->
            <form action="" method="post" enctype="multipart/form-data" name="fileUpload">
                <input type="file" name="fotos[]" id="fotos" multiple required>
                <!-- <button id="upload-button" onclick="uploadFile()"> Upload </button> -->
                <input type="submit" value="submit">
            </form>
        </div>
        <div class="row" id="Display">  <!-- Cards de subida (muestra las insertadas y el formulario de propiedades.) -->

        </div>
    </div>


    <script src="../sources/jquery.js"></script>
    <script>
        const form = document.forms.namedItem("fileUpload");
        form.addEventListener(
        "submit",
        (event) => {
            const display = document.querySelector("#Display");
            const formData = new FormData(form);

            formData.append("fotos", fotos.files);

            const request = new XMLHttpRequest();

            request.onload = (progress) => {
                display.innerHTML =
                request.status === 200
                ? "Uploaded! <br>" + request.response
                : `Error ${request.status} occurred when trying to upload your file.<br />`;
            };
            
            request.open("POST", "action.php", true);
            request.send(formData);
            event.preventDefault();
        },
        false,
        );
    </script>



<?php include "../includes/footer.php"; ?>