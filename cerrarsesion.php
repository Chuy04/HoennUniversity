<?php
    // Comienza la sesion del servidor y la base de datos
    session_start();
    // Destruir la sesion abierta con la base de datos
    session_destroy();

    // Manda a la pagina inicial
    header ("Location: ../HTML/index.html");
    //salir (es como cerrar el session star();)
    exit();

?>