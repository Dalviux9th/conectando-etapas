<?php
/* Este archivo esta dedicado a la subida de imagenes al servidor. También se encarga de mover las fotos */
    echo var_dump($_POST); die();

if (isset($_POST['direccion']) && $_POST['direccion'] != null){   // -- FIREWALL

    http_response_code(200);
    $lines = count($_POST);
} else {
    http_response_code(417); // -- Falla en la carga (417 = expectation failed)
    die();
}

    $consulta = "INSERT INTO  VALUES ()";

    for ($i=$lines; $i >= 3; $i--) { 
        # code...
    }


    $direccion = $_POST["direccion"];
    $fecha = $_POST["fecha"];
    $titulo = $_POST["titulo"];
    $decripcion = $_POST["decripcion"];

    try {
        $time = date_create("now", timezone_open('America/Argentina/Buenos_Aires'));

                $new_location = "IMG-";
                $new_location .= date_format($time, 'YmdHisu');//FOMATO: '[PRE-yyyymmddhhiissuuuuuu]' Año, mes, dia (Nro), hora en formato 24, minutos, segundos, milisegundos en formato de 6 decimales
                $new_location .= "." . pathinfo($direccion, PATHINFO_EXTENSION);

        rename("../uploads/$direccion", "../../ArchivoDigital/$new_location");
    } catch (\Throwable $th) {
        echo $th;
        die();
    }

?>