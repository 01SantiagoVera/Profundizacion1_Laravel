<?php

include 'conexiones.php';
$id = $_GET['id'];

$sql = "DELETE FROM usuario WHERE ID=$id";
$result = mysqli_query($link, $sql);
if ($result) {
    echo "<script> alert('Usuario borrado correctamente');location.href='tabla.php'; </script>";
} else {
    echo "<script> alert('No se pudo borrar el usuario'); location.href='tabla.php'; </script>";

}
?>

