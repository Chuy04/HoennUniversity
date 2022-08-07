<?php
        include("Conexionbasededatos.php");
    
        $id=$_POST['id'];
        $nombre=$_POST['Nombre'];
        $puesto=$_POST['Puesto'];
        $edad=$_POST['Edad'];
        
    
        $sql="UPDATE administrativo SET 
        Nombre_Administrativo ='$nombre',
        Puesto_Administrativo='$puesto',
        Edad_Administrativo='$edad' where 
        ID_Administrativo ='$id'";
        $query=mysqli_query($con,$sql);
        // header ("Location ../PHP/consultaradministrativo.php");
        header("location:consultaradministrativo.php");

?>