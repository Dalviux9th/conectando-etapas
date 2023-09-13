<?php
if(!isset($_POST["Enviar"])){
    header("Responder_consulta.php");
}

include 'includes/db_con.php';
$ID = $_GET["id"];
$resConsulta = $_POST["resConsulta"];

$respuesta = mysqli_query($link, "SELECT `contenido`, `Autor`, `Email` FROM `consulta` WHERE id_cons = '$ID'");
$Datos = mysqli_fetch_array($respuesta);



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'mail/vendor/autoload.php';
try{

    $email= new PHPMailer(true);
    $email->isSMTP();
    $email->Host = 'smtp.gmail.com';
    $email->SMTPAuth(true);
    $email->Username ='j5primespvlvp@gmail.com';
    $email->Password ='xllagwoxrpewjzuy';
    $email->Port = 587;

    $email->setFrom('j5primespvlvp@gmail.com', 'yo');
    $email->addAddress($Datos[2], 'vos');

    $email->isHTML();
    $email->Subject='Respuesta a su consulta';
    $email->Body=
    '
        ¡Hola '.$Datos[1].'! esta es la respeusta a tu consulta: <br>
        '.$resConsulta.'<br>
         ¡Saludso!            
    ';

    $email->send();
}
catch(Exception $e){
    echo 'Mensaje' . $email->ErrorInfo;   
}

mysqli_query($link, "DELETE FROM `consulta` WHERE id_cons = '$ID'");
header("Responder_consulta.php");
?>