<?php
    include 'backend.php';

    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $User = $_POST['User'];
    $Password = $_POST['Password'];
    $Password = hash('sha512', $Password);

    $query = "INSERT INTO usuario(Name, Email, User, Password) 
              VALUES('$Name', '$Email', '$User', '$Password')";
    
    //Verificar repeticón
    $verifyEmail = mysqli_query($conexionDb, "SELECT * FROM usuario WHERE Email='$Email' ");
    $verifyUser = mysqli_query($conexionDb, "SELECT * FROM usuario WHERE User='$User' ");

    if(mysqli_num_rows($verifyEmail) > 0)
    {
        echo 
        '
            <script>
                alert("Este correo ya ha sido registrado. Intentelo nuevamente");
                window.location = "../menuprincipal.php";
            </script>
        ';
        exit();
    }

    if(mysqli_num_rows($verifyUser) > 0)
    {
        echo 
        '
            <script>
                alert("Este usuario ya ha sido registrado. Intentelo nuevamente");
                window.location = "../menuprincipal.php";
            </script>
        ';
        exit();
    }

    $execute = mysqli_query($conexionDb, $query);

    if($execute)
    {
        echo 
        '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../menuprincipal.php";
            </script>
        ';
    }
    else
    {
        echo 
        '
            <script>
                alert("Intentelo de nuevo. Usuario no almacenado");
                window.location = "../menuprincipal.php";
            </script>
        ';
    }

    mysqli_close($conexionDb);
?>