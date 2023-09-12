<?php

if (isset($_FILES['fotos']['name'])){   // -- FIREWALL

    http_response_code(200);
    $lines = count($_FILES['fotos']['name']);
    $response[];
} else {
    http_response_code(417); // -- Falla en la carga (417 = expectation failed)
    die();
}



for ($i = 0; $i < $lines; $i++) {
    $response[$i]->status_code = 200;

    if (pathinfo($_FILES['fotos']['name'][$i], PATHINFO_EXTENSION) != 'png' || pathinfo($_FILES['fotos']['name'][$i], PATHINFO_EXTENSION) != 'jpg') {

        $response[$i]->status_code = 401;
        $response[$i]->status_text = "Tipo de archivo no autorizado. Debe ser tipo PNG o JPEG.";
    } else {
        if ($_FILES['fotos']['size'][$i] > 20000000) {

            $response[$i]->status_code = 401;
            $response[$i]->status_text = "El archivo excede el limite autorizado y es demasiado grande. Peso máximo admitido: 20MB";
        } else {

            $time = date_create("now", timezone_open('America/Argentina/Buenos_Aires'));

            $location = "uploads/PRE-";
            $location .= date_format($time, 'YmdHisu');
            $location .= "." . pathinfo($_FILES['fotos']['name'][$i], PATHINFO_EXTENSION);

            if (move_uploaded_file($_FILES['fotos']['tmp_name'][$i], $location)) {
                $response[$i]->status_code = 200;
                $response[$i]->location = $location;
            } else {
                $response[$i]->status_code = 417;
                $response[$i]->status_text = "Expectation failed.";
            }
        }
    }
    
    if ($response[$i]->status_code != 200)
        http_response_code(207) //   -- multi-status

}

?>