<?php

    require "Conexionbasededatos.php";
    
    
    $profesor_id = $_GET['ID_Profesor'];

    $eliminarprofesores = "DELETE FROM profesores WHERE ID_Profesor  = '$profesor_id' ";

    $resultado = $con->query($eliminarprofesores);

    if($resultado == TRUE){
        echo " Profesor eliminado exitosamente";
    }else{
        echo "Error" . $eliminarprofesores . "<br>" . $con->error;
    }

    header("Location: ../PHP/consultarprofesores.php");

?>