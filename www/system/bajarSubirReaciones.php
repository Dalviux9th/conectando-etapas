<?php
include "../includes/db_con.php";
    $id = $_POST["ID"];
    $reaccion = $_POST["reaccion"] ;
    $json = mysqli_query($link,"SELECT `reacciones` FROM `anecdota` WHERE `id_anec` = $id");
    $datos = mysqli_fetch_assoc($json);
    $clave = json_decode($datos['reacciones'], true);
    $clave["$reaccion"]++;
    $json = json_encode($clave);
    mysqli_query($link, "UPDATE `anecdota` SET `reacciones`= '$json' WHERE id_anec = $id");
?>