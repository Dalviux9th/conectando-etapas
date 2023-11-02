<?php
include_once 'includes/db_con.php';

$title_name = "Administrador EEST 2";
include "includes/head_settings.php"
?>
    <main class="row justify-content-center pt-5">

    <div class="col-10 px-2 border border-2 rounded" id="Display">
    <div class="row">

    <?php
        $resultado = mysqli_query($link,"SELECT * FROM `consulta`");

        while ($Datos = mysqli_fetch_array($resultado)) {

            echo ' <div class="col-12">
            <div class="card mt-4">
                <div class="card-header text-center">'.$Datos[3]. ' </div>
                <div class="card-body"><div class="card-text">'.$Datos[2].'</div>
            </div>
            <form class=" px-5" action="https://capeleti.000webhostapp.com/subir/Responder_consulta.php" method="post">
                <input type="hidden" name="id" value="'.$Datos[0].'">
                <input type="hidden" name="Contenido" value="'.$Datos[2].'"> 
                <input type="hidden" name="Autor" value="'.$Datos[3].'">
                <input type="hidden" name="Email" value="'.$Datos[4].'">
                <div class="mb-3">
                    <label for="" class="form-label">Respuesta de consulta</label>
                    <textarea class="form-control" rows="3" name="resConsulta" ></textarea>
                </div>
                    <button type="submit" class="btn btn-primary mb-3" name="Enviar" >Responder</button>
            </form>
            </div>
            </div>
            '; 
        }
    ?>

</div>
</div><!-- Cards de subida (muestra las insertadas y el formulario de propiedades.)-->

<div class="emptyPlaceholder">
            <div class="row justify-content-around">
                <img class="col-6 col-sm-4 h-100" src="./sources/images/no-results_Placeholder.png" alt="404. No encontrado">
                <div class="col-12 text-center">
                    <h3>No hay más consultas.</h3>
                </div>
            </div>
        </div>


    </main>
    
<?php

// include "includes/footer.php";
?>