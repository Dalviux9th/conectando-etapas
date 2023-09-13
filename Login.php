<?php
    $title_name = "Iniciar Sesión";
    include "includes/head_settings.php"

?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Inicio de sesión</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card border-dark mb-3">
                    <div class="card-body">
                        <form action="ValidarLogin.php" method="post">
                            
                            <?php
                                    if(isset($_GET['error'])) {
                                        $errorMessage = $_GET['error'];
                                        echo '<div class="col-12 alert alert-danger text-center">';
                                        echo   '<p class="fs-4">'. $errorMessage .'</p>';
                                        echo '</div>';
                                    }
                                ?>
                            <div class="form-group mt-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Introduce tu email" autocomplete="off" required>
                                    <label for="user" class="form-label">Email</label>
                                </div>
                            </div>    
                              <div class="form-group mt-3">
                                <div class="form-floating">   
                                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Introduce tu contraseña" autocomplete="off" required>
                                    <label for="pass" class="form-label">Contraseña</label>  
                                </div>  
                              </div>
                              <div class="form-group">
                                <button type="submit" class="btn btn-outline-success mt-4 text-info form-control" name="btnlogin">Iniciar sesión</button>
                              </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>