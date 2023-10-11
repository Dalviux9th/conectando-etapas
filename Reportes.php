<?php 
$link = mysqli_connect("localhost", "root", "", "Olimpiadas");
if (isset($_POST['btnBuscar'])){
  $sql = "SELECT * FROM `reporte` WHERE 1";
    if(!empty($_POST['callPlace'])){
      $sql .= " AND Lugar LIKE '%".$_POST ['callPlace']."%'";
    }    
    if(!empty($_POST['dateReport'])){
      $sql .= " AND Fecha LIKE '%".$_POST ['dateReport']."%'";
    }   
    if(!empty($_POST['hourReport'])){
      $sql .= " AND Fecha LIKE '%".$_POST ['hourReport']."%'";
    }    
    if(!empty($_POST['areaReport'])){
      $sql .= " AND Area LIKE '%".$_POST ['areaReport']."%'";
    }
}else{
  $sql = "SELECT * FROM `reporte`";
}?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5b34b9778f.js" crossorigin="anonymous"></script>
    <title>Punto Azul</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md bg-primary" data-bs-theme="dark">
            <div class="container-fluid">
                <i class="fa-solid fa-house-medical fa-beat fa-lg" style="color: #ffffff;"></i>
              <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navExpand" aria-controls="navExpand" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navExpand">
                <ul class="navbar-nav mx-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Pacientes.php">Pacientes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Area.php">Crear área</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="Reportes.php">Ver reportes</a>
                  </li>
                </ul>
                
                <ul class="navbar-nav align-content-end">
                    <li class="nav-item">
                        <a href="closeSession.php" class="nav-link">Cerrar sesión</a> <!--Una vez haya iniciado sesión se muestra-->
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-outline-light mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#filtrado" aria-controls="filtrado" aria-expanded="false" aria-label="Toggle navigation">Filtrar</button>
                    </li>
                </ul>  
              </div> 
            </div>  
          </nav>
    </header>
        <div class="container">
            <div class="row mt-3 mb-3 border border-1 rounded collapse" id="filtrado">
                <h1 class="text-primary text-center">Filtrado de Reportes</h1>
                <form action="Reportes.php" class="mt-3" method="post">
                  <div class="form-group row mb-3"> 
                    <h4 class="text-center">Llamado desde:</h4> 
                    <div class="form-check col-6 mx-auto">
                      <input class="form-check-input" type="radio" name="callPlace" id="callPlace" value="Cama">
                      <label class="form-check-label" for="callPlace">Cama</label>
                    </div>

                    <div class="form-check col-6 mx-auto">
                      <input class="form-check-input" type="radio" name="callPlace" id="callPlace" value="Baño">
                      <label class="form-check-label" for="callPlace">Baño</label>
                    </div>
                  <div class="form-group row mb-3"> 
                    <h4 class="text-center">Fecha y hora:</h4>
                    <div class="form-check col-12 col-md-6">
                      <label class="form-label" for="dateReport">Fecha</label>
                      <input class="form-control" type="date" name="dateReport" id="dateReport">
                    </div>
                    <div class="form-check col-12 col-md-6">
                      <label class="form-label" for="hourReport">Hora</label>
                      <input class="form-control" type="time" name="hourReport" id="hourReport">
                    </div>
                  </div>
                  <div class="form-group row mb-2"> 
                    <h4>Área</h4>
                    <div class="col-12">
                    <select class="form-select form-select-lg" name="areaReport" id="locPaciente" placeholder="Área/Zona" >
                          <!--Lo mismo que antes, por cada área que haya registrada, es un <option>. Ej:-->
                          <option value="" selected>-----</option> 
                          <?php 
                          $link = mysqli_connect("localhost", "root", "", "Olimpiadas");
                          $resultado = mysqli_query($link,"SELECT `ID_Area`, `Nombre` FROM `areas`");
                          while ($Datos = mysqli_fetch_array($resultado)) {
                            echo '<option value="'.$Datos[1].'">'.$Datos[1].'</option>';
                          }?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group mb-2">
                    <button type="submit" class=" form-control btn btn-success" name="btnBuscar">Filtrar</button>
                  </div>
                </form>
              </div> 
            </div>
    <main class="container">

        <!--Por default se van a mostrar todos los reportes. Una vez que se filtre solo se muestran los que coincidan con los criterios.
        Los reportes tienen este formato.-->
        <?php
$resultado = mysqli_query($link, $sql);

if ($resultado) {
    while ($Datos2 = mysqli_fetch_array($resultado)) {
        // Asegúrate de que $Datos2[4] no sea nulo antes de usarlo en la consulta.
        if (!is_null($Datos2[4])) {
            $Paciente = mysqli_query($link, "SELECT `Nombre` FROM `pacientes` WHERE ID_Paciente = ".$Datos2[4]."");
            $Nombre = mysqli_fetch_array($Paciente);
            echo '
            <div class="justify-content-center mt-2 mb-3">
                <div class="card mb-3" style="height:25%; width:100%">
                    <div class="row g-0">
                        <div class="col-12 col-md-5">
                            <img src="[Foto del paciente]" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-12 col-md-7">
                            <div class="card-body" style="height: 100%;">
                                <h5 class="card-title text-center ">'.$Nombre[0].'</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">'.$Datos2[3].'</li>
                                    <li class="list-group-item">'.$Datos2[1].'</li>
                                    <li class="list-group-item">'.$Datos2[2].'</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
            ';
        }
    }
} else {
    // Manejo de errores si la consulta a la base de datos falla.
    echo "Error en la consulta: " . mysqli_error($link);
}
?>
    </main>
</body>
</html>