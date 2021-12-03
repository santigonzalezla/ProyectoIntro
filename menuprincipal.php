<?php
    session_start();
    if(isset($_SESSION['User']))
    {
        header("location: assets/pages/pagina1.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN INTRO ING SISTEMAS</title>    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/estilo.css">
</head>
<body class = "menuprincipal">
        <main>
            <div class="contenedor">
                <div class="cajatrasera">
                    <div class="cajatraseraLogin">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btInicio">Iniciar Sesión</button>
                    </div>
                    <div class="cajatraseraRegistro">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btRegistro">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedorLogin">
                    <!--Login-->
                    <form action="filesphp/loginbackend.php" method="POST" class="formLogin">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Usuario" name="UserLogin">
                        <input type="password" placeholder="Contraseña" name="PasswordLogin">
                        <button id = "btLogin">Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="filesphp/registerbackend.php" method="POST" class="formRegistro" >
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="Name">
                        <input type="text" placeholder="Correo Electronico" name="Email">
                        <input type="text" placeholder="Usuario" name="User">
                        <input type="password" placeholder="Contraseña" name="Password">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>
        </main>

        <script src="assets/js/script.js"></script>
</body>
</html>
