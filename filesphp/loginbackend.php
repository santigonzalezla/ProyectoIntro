<?php
    session_start();
    include 'backend.php';

    $User = $_POST['UserLogin'];
    $Password = $_POST['PasswordLogin'];
    $Password = hash('sha512', $Password);

    //Verificar información
    $verifyLogin = mysqli_query($conexionDb, "SELECT * FROM usuario WHERE User='$User' and Password='$Password' ");

    if(mysqli_num_rows($verifyLogin) > 0)
    {
        $_SESSION['User'] = $User;
        header("location: ../assets/pages/pagina1.php");
        exit();
    }   
    else
    {
        echo
        '
        <script>
            alert("Usuario y/o contraseña incorrectos. Intentelo nuevamente");
            window.location = "../menuprincipal.php";
        </script>
        ';
        exit();
    }
?>