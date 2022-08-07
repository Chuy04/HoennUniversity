<?php

    require "Conexionbasededatos.php";

    $Consultar = "SELECT * FROM alumnos";
    $result= $con->query($Consultar);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Hoenn University</title>
    <link rel="icon" href="../IMG/icon.webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../CSS/index.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="body">

  <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="Titulo">
                  <nav class="navbar navbar-inverse navbar-light  navbar-toggleable-md">
                    <img class="image-fluid" src="../IMG/icon.webp" width="7%" height="7%">
                    <h1 class="h1 TextoTitulo ">Hoenn University</h1>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>                   
            </div>
          </div>
        </div>
    </div>
                    
                          <div class="container-fluid">
                            <div class="row">
                              <div class="col-4"> 
                              </div>
                              <div class="col-8">
                                <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
                                  <div class="navbar-nav d-flex flex-row ListaTitulo bg-success">
                                    <a class="nav-item nav-link active" href="../HTML/Principal.html"> Inicio </a>
                                    <a class="nav-item nav-link active" href="../HTML/Acerca.html"> Acerca </a> 
                                    <a class="nav-item nav-link active" href="../HTML/Oferta.html"> Oferta</a>
                                    <a class="nav-item nav-link active" href="../HTML/Servicios.html"> Servicios </a>
                                    <div class="dropdown">
                                      <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                        <img src="../IMG/drop_logo.webp" width="10%" height="10%" alt="">
                                      </button>
                                      <div class="dropdown-menu bg-success">
                                        <a class="dropdown-item" href="../HTML/index.html">Inicio Sesión</a>
                                        <a class="dropdown-item" href="../HTML/Perfil.html">Perfil</a>
                                        <div class="dropdown-divider droplogo"></div>
                                        <a class="dropdown-item" href="../HTML/Alumnos.html">Alumno</a>
                                        <a class="dropdown-item" href="../HTML/Profesor.html">Profesor</a>
                                        <a class="dropdown-item" href="../HTML/Administrativo.html">Administrativo</a>
                                        <div class="dropdown-divider droplogo"></div>
                                        <a class="dropdown-item" href="../PHP/cerrarsesion.php">Cerrar Sesión</a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>  

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <table class="table mt-5">
                                    <thead class="thead-dark">
                                        <tr >
                                            <th scope="col">ID</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Carrera</th>
                                            <th scope="col">Edad</th>
                                            <th scope="col">Promedio</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if ($result->num_rows >0){
                                              while($row = $result->fetch_assoc()){
                                        ?> 
                                            <tr>
                                              <td><?php echo $row['ID_Alumno'];?></td>
                                              <td><?php echo $row['Nombre_Alumno'];?></td>
                                              <td><?php echo $row['Carrera'];?></td>
                                              <td><?php echo $row['Edad'];?></td>
                                              <td><?php echo $row['Promedio_Alumno'];?></td>
                                              <td><a class="btn btn-info" href="ModificarAlumnos.php?ID_Alumno=<?php echo $row['ID_Alumno'];?>">
                                              Edit</a>&nbsp; <a class="btn btn-danger" href="EliminarAlumno.php?ID_Alumno=<?php echo $row['ID_Alumno'];?>">
                                              Delete</a>
                                              </td>
                                            <tr>
                                              <?php
                                              }
                                            } 
                                            ?>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>