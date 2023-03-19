<?php
// Conexión a la base de datos
include("conecta.php");
$bd = conectar();
// Procesamiento de los datos del formulario
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $edad = $_POST['edad'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $genero = $_POST['genero'];
    $tipo_usuario = $_POST['tipo_usuario'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Insertar los datos del formulario en la tabla correspondiente
    $sql = "INSERT INTO tabla_de_adultos_mayores (nombre, cedula, edad, fecha_nacimiento, genero, tipo_usuario, email, password)
            VALUES ('$nombre', '$cedula', '$edad', '$fecha_nacimiento', '$genero', '$tipo_usuario', '$email', '$password')";

$res = mysqli_query($bd,$sql);

if (!$res){
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>Error</strong><br>La cedula registrada ya existe!!.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
    </button></div>";
    //echo mysqli_error($bd);
    //echo " - "  .  mysqli_errno($bd);
}
else{
    echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
    <strong>Atención</strong><br>Registro adicionado con éxito!!.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
    </button></div>";
}
mysqli_close($bd);

?>