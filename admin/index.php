<?php
include_once 'includes/db_con.php';

$consultas = mysqli_query($link, "SELECT * FROM `consulta` ORDER BY `consulta`.`fecha` ASC");

$title_name = "Administrador EEST 2";
include "includes/head_settings.php"
?>

<main class="row justify-content-center py-3">

    <div class="col-10 col-lg-8 p-0"><!-- Encolumnado central del contenido -->
        <h3>Consultas de los usuarios</h3>
        <hr class="mt-1 mb-3">
        <div class="row">

            <div class="col-12 border rounded-3 overflow-hidden m-0">

                <?php if (mysqli_num_rows($consultas) <= 0) { ?>

                    <div class="emptyPslaceholder"><!-- Placeholder para el contenedor -->
                        <div class="row justify-content-around">
                            <img class="col-6 col-sm-4 h-100" src="./sources/images/no-results_Placeholder.png" alt="404. No encontrado">
                            <div class="col-12 text-center">
                                <h3>No hay consultas activas</h3>
                                <p>Cuándo alguien haga una pregunta, aparecerá aquí.</p>
                            </div>
                        </div>
                    </div>

                <?php } else { ?>

                    <div class="row">

                        <div class="col-12 tab-content" id="tabConsultas"><!--  -->
                            <?php $first = true; foreach ($consultas as $datos) { ?>

                                <div class="tab-pane fade<?php if ($first) echo ' show active'; $first = false; ?>" id="consulta-<?php echo $datos['id_cons']; ?>" role="tabpanel" tabindex="0">

                                    <div class="row justify-content-between bg-secondary-subtle py-1 px-2">

                                        <div class="d-none d-sm-inline col-auto text-secondary">
                                            <svg xmlns="http://www.w3.org/2000/svg" style="fill: var(--bs-secondary);" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 64C150 64 64 150 64 256s86 192 192 192c17.7 0 32 14.3 32 32s-14.3 32-32 32C114.6 512 0 397.4 0 256S114.6 0 256 0S512 114.6 512 256v32c0 53-43 96-96 96c-29.3 0-55.6-13.2-73.2-33.9C320 371.1 289.5 384 256 384c-70.7 0-128-57.3-128-128s57.3-128 128-128c27.9 0 53.7 8.9 74.7 24.1c5.7-5 13.1-8.1 21.3-8.1c17.7 0 32 14.3 32 32v80 32c0 17.7 14.3 32 32 32s32-14.3 32-32V256c0-106-86-192-192-192zm64 192a64 64 0 1 0 -128 0 64 64 0 1 0 128 0z"/></svg>
                                            <?php echo $datos['Email']; ?>
                                        </div>

                                        <div class="col text-end text-secondary">
                                            <?php echo date('d/m/y H:i', strtotime($datos['fecha'])); ?>
                                            <svg class="px-2" xmlns="http://www.w3.org/2000/svg" style="fill: var(--bs-secondary);" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M184 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H96c-35.3 0-64 28.7-64 64v16 48V448c0 35.3 28.7 64 64 64H416c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H376V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H184V24zM80 192H432V448c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V192zm176 40c-13.3 0-24 10.7-24 24v48H184c-13.3 0-24 10.7-24 24s10.7 24 24 24h48v48c0 13.3 10.7 24 24 24s24-10.7 24-24V352h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H280V256c0-13.3-10.7-24-24-24z"/></svg>
                                        </div>

                                    </div>

                                    <div class="row px-3 py-4">

                                        <div class="col-12 col-md-6"><!-- Conslta del usuario -->
                                            <div class="form-text mb-2"><b><?php echo $datos['Nombre']; ?></b> preguntó...</div>
                                            <div class="consultaCont"><?php echo $datos['contenido']; ?></div>
                                        </div>

                                        <hr class="d-md-none col mx-4 my-3">

                                        <div class="col-12 col-md-6"><!-- Input de respuesta -->
                                            <form class="text-end" action="https://capeleti.000webhostapp.com/subir/Responder_consulta.php" method="post">
                                                <input type="hidden" name="id" value="<?php echo $datos['id_cons']; ?>">
                                                <input type="hidden" name="Contenido" value="<?php echo $datos['contenido']; ?>">
                                                <input type="hidden" name="Autor" value="<?php echo $datos['Nombre']; ?>">
                                                <input type="hidden" name="Email" value="<?php echo $datos['Email']; ?>">

                                                <div class="col-12 text-start mb-3">
                                                    <label for="" class="form-label form-text">Inserte la respuesta:</label>
                                                    <textarea class="form-control" rows="3" name="resConsulta" placeholder="Ej. Buendía, nos comunicamos desde Técnica 2..." title="Escriba una respuesta para enviarle a <?php echo $datos['Nombre']; ?>"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary" name="Enviar">Enviar respuesta</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                        <div class="consultaList col-12 border-top overflow-y-scroll" role="tablist"><!-- Lista de consultas -->
                            <div class="col-12 sticky-top bg-light m-0 border-bottom">
                                Todas las consultas:
                            </div>
                            <?php $first = true; foreach ($consultas as $datos) { ?>

                                <div class="row nav-item" role="presentation">
                                    <button class="nav-link col-12 p-2 px-3<?php echo ($first) ? ' active' : null; ?>" id="tabConsulta-<?php echo $datos['id_cons']; ?>" data-bs-toggle="tab" data-bs-target="#consulta-<?php echo $datos['id_cons']; ?>" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="<?php echo $first; $first = false; ?>">
                                        <div class="row text-start justify-content-between">

                                            <div class="col-2 col-md-4">
                                                <div class="row">
                                                    <div class="col-3"><?php echo date('d/m', strtotime($datos['fecha'])); ?></div>
                                                    <div class="col-9 d-none d-md-inline px-md-2 text-truncate"><?php echo $datos['Nombre']; ?></div>
                                                </div>
                                            </div>

                                            <div class="col-10 col-md-8 text-truncate" style="max-width: 50vw;">
                                                <?php echo $datos['contenido']; ?>
                                            </div>

                                        </div>
                                    </button>
                                </div>

                                <hr class="col mx-3 my-0">

                            <?php } ?>

                        </div>

                    </div>
                <?php } ?>
            </div>
        </div>
    </div><!-- Contenedor de consultas (fin) -->

</main>

<?php

include "includes/footer.php";
?>