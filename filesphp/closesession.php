<?php
    session_start();
    session_destroy();
    echo
        '
        <script>
            alert("Ha cerrado sesión. Vuelva pronto");
            window.location = "../menuprincipal.php";
        </script>
        ';
?>