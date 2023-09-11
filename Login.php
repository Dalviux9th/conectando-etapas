<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Login Épico</title>
</head>
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