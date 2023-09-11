<?php
if(!isset($_POST['Envio']))
    header('Locate:FAQ.html');

include 'includes/db_con.php';
$Nombre = $_POST['Nombre'];
$Email = $_POST['Email'];
$Consulta = $_POST['Consulta'];

$Consulta= mysql_query("INSERT INTO "); 




?>