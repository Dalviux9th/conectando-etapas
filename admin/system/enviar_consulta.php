<?php
if(!isset($_POST['Envio'])){
    header('Locate:FAQ.html');
    die();
}
include 'includes/db_con.php';
$Nombre = $_POST['Nombre'];
$Email = $_POST['Email'];
$Consulta = $_POST['Consulta'];
$fechaActual = date('Y-m-d H:i:s');

$Consulta= mysqli_query($link, "INSERT INTO `consulta`( `fecha`, `contenido`, `Nombre`, `Email`) VALUES ('$fechaActual','$Consulta','$Nombre','$Email')"); 

header("location: FAQ.php");
die();


?>