<?php
        include("Conexionbasededatos.php");
    
        $id=$_POST['id'];
        $nombre=$_POST['Nombre'];
        $carrera=$_POST['Carrera'];
        $edad=$_POST['Edad'];
        
    
        $sql="UPDATE profesores SET 
        Nombre_Profesor ='$nombre',
        Carrera_Profesor='$carrera',
        Edad_Profesor='$edad' where 
        ID_Profesor ='$id'";
        $query=mysqli_query($con,$sql);
        // header ("Location ../PHP/consultaradministrativo.php");
        header("location:consultarprofesores.php");

?>