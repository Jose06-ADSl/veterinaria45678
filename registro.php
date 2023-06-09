<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registro</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="css2/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
  
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Crea tu cuenta</h1>
                            </div>
                            <form  class="user needs-validation" id="miform">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="nombres"
                                            placeholder="Nombres" name="nombres" required>
                                            <div class="valid-feedback">
                                               ¡Se ve bien!
                                              </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="apellidos"
                                            placeholder="Apellidos" name="apellidos" required>
                                            <div class="valid-feedback">
                                               ¡Se ve bien!
                                              </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email"
                                        placeholder="email" name="email" required>
                                        <div class="valid-feedback">
                                               ¡Se ve bien!
                                              </div>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control form-control-user" id="telefono"
                                        placeholder="telefono" name="telefono" required>
                                        <div class="valid-feedback">
                                               ¡Se ve bien!
                                              </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="password" placeholder="password" name="password" required>
                                            <div class="valid-feedback">
                                               ¡Se ve bien!
                                              </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password" required>
                                            <div class="valid-feedback">
                                               ¡Se ve bien!
                                              </div>
                                    </div>
                                </div>
                                
                                <input  id="open-modal" type="button" value="Crear cuenta" class="btn btn-primary btn-user btn-block"  onclick="registrar()";/>
                                 
                                </a>
                                <hr>
                                <a href="index.php" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Inicia con Google
                                </a>
                                <a href="index.php" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Inicia con Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="index.php">Olvidaste tu contraseña?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Ya tienes cuenta? Inicia!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<script>


</script>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>