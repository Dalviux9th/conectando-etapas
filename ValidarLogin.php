<?php

include "includes/db_con.php";


if (isset($_POST['btnlogin'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $consul = mysqli_query($link, "SELECT `clave`, `email` FROM `admin` WHERE `email` = '$email'");

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
                header('Location: Index.php');
                exit();
            } else {
                header("Location: login.php?error=Datos%20de%20sesi%C3%B3n%20incorrectos");
                exit();
            }
    } else {
        header("Location: login.php?error=Datos%20de%20sesi%C3%B3n%20incorrectos");
        exit();
    }

 
}
 ?>