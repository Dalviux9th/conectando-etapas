<?php

include "includes/db_con.php";


if (isset($_POST['btnlogin'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $consul = mysqli_query($link, "SELECT `clave`, FROM `admin` WHERE `email` = '$email'");

    $rows = mysqli_num_rows($consul);


    /*
    if ($stmt = $mysqli->prepare($query)) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
    */





    if ($rows == 1){
        $hash = mysqli_fetch_assoc($consul);
            if(password_verify($pass, $hash['clave'])){
                session_start();
                $_SESSION["user"] = $username;
                header('Location: Perfil.php');
                exit();
            } else {
                $error_message = "La contraseña es incorrecta. Porfavor vuelva a intentarlo.";
            }
    } else {
        $error_message = "El e-mail es incorrecto. Porfavor vuelva a intentarlo.";
    }

 
}
 ?>