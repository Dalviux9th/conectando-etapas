<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sources/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
        <?php
            include 'includes/db_con.php';
            $resultado = mysqli_query($link,"SELECT * FROM `consulta`");
            
            while ($Datos = mysqli_fetch_array($resultado)) {

                echo '<div class="card mt-4">
                    <div class="card-header text-center">'.$Datos[3]. ' </div>
                    <div class="card-body"><div class="card-text">'.$Datos[2].'</div>
                </div>
                <form action="https://capeleti.000webhostapp.com/subir/Responder_consulta.php" method="post">
                    <input type="hidden" name="id" value="'.$Datos[0].'">
                    <input type="hidden" name="Contenido" value="'.$Datos[2].'"> 
                    <input type="hidden" name="Autor" value="'.$Datos[3].'">
                    <input type="hidden" name="Email" value="'.$Datos[4].'">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Respuesta de consulta</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="resConsulta" ></textarea>
                    </div>
                      <button type="submit" class="btn btn-primary mb-3" name="Enviar" >Responder</button>
                </form>
                </div>
                '; 
            }
        ?>
        </div>
    </div>
</body>
</html>