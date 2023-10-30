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

$Consulta= mysqli_query($link, "INSERT INTO `consulta`( `contenido`, `Nombre`, `Email`) VALUES ('$fechaActual','$Consulta','$Nombre','$Email')"); 
if $Consulta = false
    header("location: FAQ.php?done=2");
else
    header("location: FAQ.php?done=1");

die();


?>