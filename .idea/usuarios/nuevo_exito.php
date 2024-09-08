<?php
include 'conexiones.php';


if (!$link) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Obtener los datos del formulario
$Nombre = $_POST['nombre'] ;
$Apellido = $_POST['apellido'] ;
$email = $_POST['email'] ;
$telefono = $_POST['telefono'] ;
$genero = $_POST['genero'] ;
$ciudad = $_POST['ciudad'] ;


$query = "INSERT INTO usuario (Nombre, ApellidoS, email, telefono, genero, ciudad) 
          VALUES ( '$Nombre', '$Apellido', '$email', '$telefono', '$genero', '$ciudad')";

// Ejecutar la consulta
$result = mysqli_query($link, $query);

if ($result) {
    echo "<script> alert('Usuario registrado exitosamente'); location.href='tabla.php'; </script>";
} else {
    echo "<script> alert('No se pudo registrar el usuario'); location.href='tabla.php'; </script>";
}

mysqli_close($link);
?>
