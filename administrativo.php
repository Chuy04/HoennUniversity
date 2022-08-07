<?php

    include "Conexionbasededatos.php";


    session_start();

        $nombreadministrativo = $_POST['txt_nombre_a'];

        $puesto= $_POST['txt_puesto_a'];

        $edad= $_POST['txt_edad_a'];

        $insercion_administrativo =  
            "INSERT INTO administrativo (Nombre_Administrativo, Puesto_Administrativo, Edad_Administrativo)
                    values ('$nombreadministrativo', '$puesto', '$edad')";

        $Resultado = $con->query($insercion_administrativo);

        if ($Resultado == TRUE){
            echo "Administrativo agregado exitosamente";
            header("Location: ../HTML/Administrativo.html");
        }else{
            echo "Error" . $insercion_administrativo . "<br>" . $con->error;
        }
        $con->close();

?>
