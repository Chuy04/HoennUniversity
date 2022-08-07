<?php

    require "Conexionbasededatos.php";
    
    
    $admin_id = $_GET['ID_Administrativo'];

    $eliminaradmin = "DELETE FROM administrativo WHERE ID_Administrativo = '$admin_id' ";

    $resultado = $con->query($eliminaradmin);

    if($resultado == TRUE){
        echo " Administrador eliminado exitosamente";

    }else{
        echo "Error" . $eliminaradmin . "<br>" . $con->error;
    }
    
    header("Location: ../PHP/consultaradministrativo.php");
?>