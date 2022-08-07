<?php
// comenzar la sesion con la funcion session_start(); . Parecida a un function.
    session_start();

    require "Conexionbasededatos.php";
    
// Mandar a llamar los inputs del formulario  
    $usuario = $_POST ["txtNombre"];
    $password = $_POST ["txtContraseña"];

    $validarlogin = mysqli_query ($con, "SELECT * from usuario 
                                 where user= '$usuario' and pass = '$password' ");


// Condicion para acceder a la pagina, de lo contrario mostrara un mensaje
    if(mysqli_num_rows($validarlogin)>0){
        header("Location: ../HTML/Principal.html");
    }
    else {
        echo '<script> 
                        alert ("No existe ese usuario") 
                        window.history.go(-1);
            </script>';               
}

?>