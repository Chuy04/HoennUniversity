<?php
// function conectar(){
$dbname ="hoenn_university";
$dbuser = "root";
$dbhost = "localhost:3307";
$dbpass ="";
$con=mysqli_connect($dbhost,$dbuser,$dbpass);
$db = mysqli_select_db($con, $dbname);
// return $con;
// }
if ($con -> connect_errno){
    die("La conexión es fallida". $con -> connect_error());
    exit();
}else{
    echo "La conexión fue exitosa";
} 
?>
