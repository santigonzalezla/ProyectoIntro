<?php
    session_start();
    if(!isset($_SESSION['User']))
    {
        echo 
        '  
            <script>
                alert("Por favor inicia sesión")
                window.location = "../../menuprincipal.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>INTRO ING SISTEMAS</title>
    <meta charset="UTF-8">
    <link href = "../styles/estilo.css" rel = "stylesheet" type = "text/css">
</head>

<body class = "menuprincipal">
    <div class = "datos">
        <center><img src = "../images/logo.png" width = "200px" height = "170"></img></center>
        <br>

        <h1>¿QUIÉN SOY?</h1>
        <h4>Siempre he considerado que es muy dificil contetsar a la pregunta de quien somos es algo que para muchos es muy complejo, no somos lo que hacemos, ni lo que nos gusta, ni como nos vemos, ni mucho menos lo que queremos.</h4>
        <h4>Simplemente somos, el hecho de ser va mas alla de nuestras pasiones, y se basa en el hecho de la existencia. Sin embargo, como muchas personas tengo consideraciones personales, como que me gusta jugar fubtol, voleibol, actualmente practico rugby. 
            Me gusta mucho la musica, el cine y sobre todo los superheroes. Soy una persona bastante feliz y que le gusta mucho reir, tambien, me encanta el humor y pienso que este deberia ser sin limites. Entre esto y mucho mas eso soy.</h4>
        
        <a href = "pagina2.html">HOBBIES</a><br>
        <a href = "pagina3.html">¿POR QUÉ LA ING DE SISTEMAS?</a>
        <br>
        <br>
        <br>
        <a href = "../../filesphp/closeSession.php">Cerrar Sesión</a>
    </div>
</body>
</html>