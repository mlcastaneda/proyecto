

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Sign Up</title>
</head>
<body>

    <?php require 'partials/header.php' ?>

    <div id="signup">
        <h3 class="text-center text-white pt-5">Crear Cuenta</h3>
        <div class="container">
            <div id="signup-row" class="row justify-content-center align-items-center">
                <div id="signup-column" class="col-md-6">
                    <div id="signup-box" class="col-md-12">
                        <form action="register_file.php" class="form" method="POST">

                            <div class="form-group">
                                <label for="username" class="text-info">Usuario:</label><br>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="email" class="text-info">E-mail:</label><br>
                                <input type="text" name="email" id="email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="passwordd" class="text-info">Contraseña:</label><br>
                                <input type="password" name="passwordd" id="passwordd" class="form-control" required>
                            </div>


                            <div class="form-group text-center">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Registrarse">
                            </div>

                            <div id="register-link" class="text-center">
                                <a href="login.php" class="btn btn-info btn-md">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>




