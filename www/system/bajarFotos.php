<?php
include "../includes/db_con.php";
include "imagen.php";

$pass = $_POST["pass"];
$id = $_POST["id"];
$id2 = $id + 6;
   if (isset($pass) && $pass == "1234") {
    $res = mysqli_query($link,"SELECT `id_img`, `ubicacion` FROM `imagen` WHERE `id_img` > $id  AND   `id_img`< $id2" ); 
    $jsonImg = array();
    while ($datos = mysqli_fetch_array($res)) {
        $img = new imagen($datos[0],$datos[1]);
        $jsonImg[] = $img;
    } 
    echo json_encode($jsonImg);
   }
   else{
     $e = "error";
     echo json_encode($e);
 }
?>