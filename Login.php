<?php
    $title_name = "Iniciar Sesión";
    include "includes/head_settings.php"

?>
<body style="color: #1B036D;">
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
                                    if(isset($_GET['error']))
                                     echo '<div class="alert alert-danger text-center">
                                            <strong>¡Datos incorrectos!</strong> Compruebe los datos de sesión e inténtelo denuevo.
                                            </div>';
                                     
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
                                <button type="submit" class="btn btn-primary btn-primary-outline-success mt-4 text-light form-control" name="btnlogin">Iniciar sesión</button>
                              </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>