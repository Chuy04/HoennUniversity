<?php

    require "Conexionbasededatos.php";
    
    
    $student_id = $_GET['ID_Alumno'];

    $eliminaralumno = "DELETE FROM alumnos WHERE ID_Alumno = '$student_id' ";

    $resultado = $con->query($eliminaralumno);

    if($resultado == TRUE){
        echo " Alumno Eliminado Exitosamente";
    }else{
        echo "Error" . $eliminaralumno . "<br>" . $con->error;
    }

    header("Location: ../PHP/consultaralumnos.php");


?>