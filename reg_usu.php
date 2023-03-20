<?php
// Conexión a la base de datos
include("conecta.php");
$bd = conectar();

$nombre = $_POST["nombre"];
$cedula = $_POST["cedula"];
$telefono = $_POST["telefono"];
$edad = $_POST["edad"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];
$genero = $_POST["genero"];
$tipo_usuario = $_POST["tipo_usuario"];
$nombre_usuario = $_POST["nombre_usuario"];
$email = $_POST["email"];
$password = $_POST["password"];

// Preparar la consulta SQL para insertar los datos en la tabla de usuarios
$sql = "INSERT INTO usuarios (nombre, cedula, telefono, edad, fecha_nacimiento, genero, tipo_usuario, email, nombre_usuario, password) VALUES ('$nombre', '$cedula', '$telefono', '$edad', '$fecha_nacimiento', '$genero', '$tipo_usuario', '$email','$nombre_usuario', '$password')";
$res = mysqli_query($bd,$sql);

if (!$res){
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>Error</strong><br>La cedula registrada ya existe!!.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
    </button></div>";
    header ("refresh:1; url=register.php");
}
else{
    echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
    <strong>Atención</strong><br>Registro adicionado con éxito!!.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
    </button></div>";
    header ("refresh:1; url=register.php");
}
// Cerrar la conexión a la base de datos
mysqli_close($bd);
?>




