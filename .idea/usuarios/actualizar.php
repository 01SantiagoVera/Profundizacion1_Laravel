<?php
include 'conexiones.php';
$id = $_GET['id'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

$sql = "UPDATE usuario SET nombre='$nombre', email='$email', telefono='$telefono' WHERE ID=$id";
if ($link->query($sql) === TRUE) {
  echo "Usuario actualizado correctamente";
} else {
  echo "Error: " . $sql . "<br>" . $link->error;
}
?>
