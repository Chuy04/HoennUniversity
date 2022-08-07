        <?php
        include "Conexionbasededatos.php";
        $id_pr=$_GET['ID_Profesor'];

        $sql="SELECT * FROM profesores where ID_Profesor=$id_pr";
        
        $query=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($query);
        ?>


<!doctype html>
<html lang="en">
  <head>
    <title>Hoenn University</title>
    <link rel="icon" href="../IMG/icon.webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../CSS/alumnos.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="body">
            <h2>Modificar profesor</h2>
                <form action="ActProfe.php" method="POST">
                    <input type="hidden"name="id" value="<?php echo $row['ID_Profesor']?>">
        
                    <input type="text"class="form-control mb-3" name="Nombre" placeholder="Nombre"value="<?php echo $row['Nombre_Profesor']?>">
                    <input type="text"class="form-control mb-3" name="Carrera" placeholder="Carrera"value="<?php echo $row['Carrera_Profesor']?>">
                    <input type="text"class="form-control mb-3" name="Edad" placeholder="Edad"value="<?php echo $row['Edad_Profesor']?>">

                    <input type="submit" class="btn btn-primary btn-block"value="Actualizar">
        
                </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php
header ("Location ../php/consultarprofesores.php");

?>
