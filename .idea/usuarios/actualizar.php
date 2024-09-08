<?php
include 'conexiones.php';
$id = $_GET['id'];
$Nombre = $_POST['nombre'] ;
$Apellido = $_POST['apellido'] ;
$email = $_POST['email'] ;
$telefono = $_POST['telefono'] ;
$genero = $_POST['genero'] ;
$ciudad = $_POST['ciudad'] ;

$sql = "UPDATE usuario SET Nombre='$Nombre',Apellidos='$Apellido', email='$email', telefono='$telefono',genero='$genero', ciudad='$ciudad' WHERE ID=$id";


$result = mysqli_query($link, $sql);
if ($result) {
    echo "<script> alert('Usuario actualizado correctamente');location.href='tabla.php'; </script>";
  } else {
    echo "<script> alert('No se pudo registrar el usuario'); location.href='tabla.php'; </script>";

}
?>
