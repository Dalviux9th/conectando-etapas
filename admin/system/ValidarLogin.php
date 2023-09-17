<?php
include "db_connect.php";


if (isset($_POST['btnlogin'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $consul = mysqli_query($connection, "SELECT `clave`, FROM `admin` WHERE `email` = '$email'");

    $rows = mysqli_num_rows($consul);

    if ($rows == 1){
        $hash = mysqli_fetch_assoc($consul);
        if(password_verify($pass, $hash['clave'])){
        session_start();
        $_SESSION["user"] = $username;
        header('Location: Perfil.php');
    }
    //else con mensaje de login erroneo.
    }else{
        echo "Inicio de sesión erróneo";
    }


 }

 ?>