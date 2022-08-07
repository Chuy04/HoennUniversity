<?php

    include "Conexionbasededatos.php";


    session_start();

        $nombreprofesor = $_POST['txt_nombre_p'];

        $carrera= $_POST['txt_carrera_p'];

        $edad= $_POST['txt_edad_p'];

        $insercion_profesores = 
            "INSERT INTO profesores (Nombre_Profesor, Carrera_Profesor, Edad_Profesor)
                    values ('$nombreprofesor', '$carrera', '$edad')";

        
        $Resultado = $con->query($insercion_profesores);

        if ($Resultado == TRUE){
            echo "Profesor agregado exitosamente";
            header("Location: ../HTML/Profesor.html");
        }else{
            echo "Error" . $insercion_profesores . "<br>" . $con->error;
        }
        $con->close();

?>
