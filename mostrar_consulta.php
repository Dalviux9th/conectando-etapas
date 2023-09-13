<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/sources/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <?php
        include 'includes/db_com.php';
         $resultado= mysqli_query($link,"SELECT * from Consultas");
        
        while ($Datos = mysqli_fetch_array($resultado)) {
            echo $Datos[1];
        }
    
    
    
    
    ?>
</body>
</html>