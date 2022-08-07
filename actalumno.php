•<?php
        include("Conexionbasededatos.php");
    
        $id=$_POST['id'];
        $nombre=$_POST['Nombre'];
        $puesto=$_POST['Carrera_al'];
        $edad=$_POST['Edad_al'];
        $promedio=$_POST['Prom'];
    
        $sql="UPDATE alumnos SET 
        Nombre_Alumno ='$nombre',
        Carrera='$puesto',
        Edad='$edad',
        Promedio_Alumno = '$promedio' where 
        ID_Alumno  ='$id'";
        $query=mysqli_query($con,$sql);
        header("location:consultaralumnos.php");

?>