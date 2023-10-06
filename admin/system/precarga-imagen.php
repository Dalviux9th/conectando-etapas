<?php

class response 
{
    public $status_code = 100;
    public $status_text = "Pending..";
    public $location = "undefined";
    public $original_name = "Imagen";
}


if (isset($_FILES['fotos']['name'])){   // -- FIREWALL

    http_response_code(200);
    $lines = count($_FILES['fotos']['name']);
    $response = [];
} else {
    http_response_code(417); // -- Falla en la carga (417 = expectation failed)
    die();
}


$num_errors = 0;

for ($i = 0; $i < $lines; $i++) {
    $response[$i] = new response();

    $response[$i]->status_code = 200;

    if ($_FILES['fotos']['size'][$i] <= 0) {

        $response[$i]->status_code = 404; //  -- 404 = NotFound
        $response[$i]->status_text = "El archivo no existe o fue movido.";
        $response[$i]->original_name = $_FILES['fotos']['name'][$i];
    } else {

        if (pathinfo($_FILES['fotos']['name'][$i], PATHINFO_EXTENSION) != 'png' && pathinfo($_FILES['fotos']['name'][$i], PATHINFO_EXTENSION) != 'jpg') {

            $response[$i]->status_code = 401; //  -- 401 = NonAuthorized
            $response[$i]->status_text = "Tipo de archivo no autorizado. Debe ser tipo PNG o JPEG.";
            $response[$i]->original_name = $_FILES['fotos']['name'][$i];
        } else {
            if ($_FILES['fotos']['size'][$i] > 20000000) {

                $response[$i]->status_code = 401; //  -- 401 = NonAuthorized
                $response[$i]->status_text = "El archivo excede el limite autorizado y es demasiado grande. Peso máximo admitido: 20MB";
                $response[$i]->original_name = $_FILES['fotos']['name'][$i];
            } else {

                $time = date_create("now", timezone_open('America/Argentina/Buenos_Aires'));
                
                $location = "uploads/PRE-";
                $location .= date_format($time, 'YmdHisu');
                $location .= "." . pathinfo($_FILES['fotos']['name'][$i], PATHINFO_EXTENSION);

                try {
                    move_uploaded_file($_FILES['fotos']['tmp_name'][$i], "../".$location);
                    $response[$i]->status_code = 200;
                    $response[$i]->status_text = "OK";
                    $response[$i]->location = $location;
                    $response[$i]->original_name = $_FILES['fotos']['name'][$i];
                } catch (\Throwable $th) {
                    $response[$i]->status_code = 417; //  -- 417 = expectation failed
                    $response[$i]->status_text = "Hubo un error inesperado:<br>417. <b>Expectation failed</b>:  - $th<br>Reintente la carga.";
                    $response[$i]->original_name = $_FILES['fotos']['name'][$i];
                }
            }
        }
    }

    if ($response[$i]->status_code != 200)
        $num_errors ++;
    

}

    if ($num_errors > 0)
        if ($num_errors < $lines)
            http_response_code(207); //   -- multi-status
        else
            http_response_code(417); //   -- expectation failed
    else
        http_response_code(200); //   -- status: ok

    echo json_encode($response);
    die();
?>