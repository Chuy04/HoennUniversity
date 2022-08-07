<?php

    include "Conexionbasededatos.php";


    session_start();

        $nombrealumno = $_POST['txt_nombre'];

        $carrera= $_POST['txt_carrera'];

        $promedio = $_POST['txt_prom'];

        $edad= $_POST['txt_edad'];

        $insercion_alumnos =  
            "INSERT INTO alumnos (Nombre_Alumno, Carrera, Promedio_Alumno, Edad)
                values ('$nombrealumno', '$carrera', '$promedio', '$edad')"
        ;

        $Resultado = $con->query($insercion_alumnos);

        if ($Resultado == TRUE){
            echo "Alumno agregado exitosamente";
            header("Location: ../HTML/Alumnos.html");
        }else{
            echo "Error" . $insercion_alumnos . "<br>" . $con->error;
        }
        $con->close();

?>
