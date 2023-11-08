<?php
include_once 'includes/db_con.php';

$title_name = "Administrador EEST 2";
include "includes/head_settings.php"
?>

<main class="row justify-content-center py-3">

    <div class="col-10 p-0"><!-- Contenedor de consultas -->
        <h3>Consultas de los usuarios</h3>
        <hr class="mt-1 mb-3">
        <div class="row">


            <?php
            $consultas = mysqli_query($link, "SELECT * FROM `consulta` ORDER BY `consulta`.`fecha` ASC");
            if (mysqli_num_rows($consultas) < 1){

            ?>
                <div class="emptyPlaceholder"><!-- Placeholder para el contenedor -->
                    <div class="row justify-content-around">
                        <img class="col-6 col-sm-4 h-100" src="./sources/images/no-results_Placeholder.png" alt="404. No encontrado">
                        <div class="col-12 text-center">
                            <h3>No hay más consultas.</h3>
                        </div>
                    </div>
                </div>

            <?php } else { ?>

                <div class="col-12 border rounded-2 h-5 m-0" id="tabConsultas">

                    <?php $first = true; foreach ($consultas as $datos) { ?>

                        <div class="tab-pane fade<?php if ($first) echo ' show active'; $first = false; ?>" id="consulta-<?php echo $datos['id_cons']; ?>" role="tabpanel" tabindex="0">

                        

                            <form action="https://capeleti.000webhostapp.com/subir/Responder_consulta.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $datos[0] ?>">
                                <input type="hidden" name="Contenido" value="<?php echo $datos[2] ?>"> 
                                <input type="hidden" name="Autor" value="<?php echo $datos[3] ?>">
                                <input type="hidden" name="Email" value="<?php echo $datos[4] ?>">

                                <div class="mb-3">
                                    <label for="" class="form-label">Respuesta de consulta</label>
                                    <textarea class="form-control" rows="3" name="resConsulta"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary mb-3" name="Enviar">Enviar respuesta</button>
                            </form>

                        </div>
                    

                        <!--div class="col-12">
                            <div class="card mt-4">

                                <div class="card-header text-center"><?php echo $datos[3] ?></div>
                                <div class="card-body">
                                    <div class="card-text"><?php echo $datos[2] ?></div>
                                </div>

                            </div>
                        </div-->

                    <?php } ?>
                </div>

                <div role="tablist">
                    <?php
                    $first = true;
                    foreach ($consultas as $datos) {
                    ?>
                        <div class="nav-item" role="presentation">
                            <button class="nav-link<?php echo ($first) ? ' active' : null; ?>" id="tabConsulta-<?php echo $datos['id_cons']; ?>" data-bs-toggle="tab" data-bs-target="#consulta-<?php echo $datos['id_cons']; ?>" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="<?php echo $first; $first = false; ?>">Home</button>
                        </div>

                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div><!-- Contenedor de consultas (fin) -->

<?php

include "includes/footer.php";
?>