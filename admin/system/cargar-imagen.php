<?php
/* Este archivo esta dedicado a la subida de imagenes al servidor. También se encarga de mover las fotos */
    include "../includes/db_con.php";

    if (!isset($_POST['direccion']) || $_POST['direccion'] == null){   // -- FIREWALL
        http_response_code(417); // -- Falla en la carga (417 = expectation failed)
        die();
    }

    $direccion = $_POST["direccion"];
    $fecha = $_POST["fecha"];
    $titulo = $_POST["titulo"];
    $decripcion = $_POST["decripcion"];

    /*
    // -- Comprime la imagen y ajusta su tamaño (No deben ser mayores a 300 kB)(El lado largo no debe ser mayor a 1200 px) -- //

    if (filesize("../uploads/$direccion") > 300000) {// mayor que 300 mil bytes
        imagejpeg($newImage, 'imagen_optimizada.jpg', 80)
    }

    // -- Intenta guardar la imagen en la carpeta 'ArchivoDigital' (ubicada en root) -- //
    */

    try {
        /* -- Genera el nombre de la foto (basado en el tiempo actual) -- */
        $time = date_create("now", timezone_open('America/Argentina/Buenos_Aires'));

        $new_location = "IMG-";
        $new_location .= date_format($time, 'YmdHisu');//FOMATO: '[PRE-yyyymmddhhiissuuuuuu]' Año, mes, dia (Nro), hora en formato 24, minutos, segundos, milisegundos en formato de 6 decimales
        $new_location .= "." . pathinfo($direccion, PATHINFO_EXTENSION);

        

        rename("../uploads/$direccion", "../../ArchivoDigital/$new_location");

    } catch (\Throwable $th) {

        http_response_code(417);
        echo $th;
        die();
    }

    try {
        $consulta = mysqli_query($link, "INSERT INTO imagen (ubicacion, titulo, descripcion, fecha) VALUES ('$new_location', '$titulo', '$decripcion', '$fecha')");
        if (!$consulta) {
            http_response_code(417);
            die();
        } else {
            /* -- Pide la id de la imagen recien cargada -- */
            $consulta = mysqli_query($link, "SELECT id_img FROM imagen WHERE ubicacion = '$new_location';");
            
            if (mysqli_num_rows($consulta) < 1) {
                http_response_code(417);
                die();
            }
            $datos = mysqli_fetch_array($consulta);
            $qry = "INSERT INTO tiene_categoria (id_imagen, id_categoria) VALUES ";

            /* -- Cargar la consulta para agregar las categorias a su tabla -- */
            foreach ($_POST['CATEGORIA'] as $categoria) {
                $qry .= "($datos[0], $categoria), ";
            }
            $qry .= "(0,0);";

            $consulta = mysqli_query($link, $qry);
            if (!consulta) {
                http_response_code(417);
                die();
            }
        }

    } catch (\Throwable $th) {

        http_response_code(417);
        echo $th;
        die();
    }






?>