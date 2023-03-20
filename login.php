
<?php
/// funciona pero no se como capturar el nombre del usuario para lo demas
include 'conecta.php';
$bd = conectar();
session_start();

if (isset($_POST['nombre_usuario']) && isset($_POST['password'])) {
    $nombre_usuario = mysqli_real_escape_string($bd, $_POST['nombre_usuario']); // Escapar los caracteres especiales del nombre de usuario
    $password = mysqli_real_escape_string($bd, $_POST['password']); // Escapar los caracteres especiales de la contraseña

    $query = "SELECT * FROM usuarios WHERE nombre_usuario='$nombre_usuario' AND password='$password'";
    $result = mysqli_query($bd, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['nombre_usuario'] = $row['nombre_usuario'];
        $_SESSION['tipo_usuario'] = $row['tipo_usuario'];

        if ($_SESSION['tipo_usuario'] == 'Adulto Mayor') {
            header('Location: adulto_home.php');
        } else if ($_SESSION['tipo_usuario'] == 'Entrenador') {
            $_SESSION['$nombre_entrenador'] = $row['nombre']; // Guardar el nombre del entrenador en la variable de sesión no funciona
            header('Location: trainer_home.php');
        }
    } else {
        echo "<script>alert('Usuario o contraseña incorrectos.')</script>";
    }
}
mysqli_close($bd);
?>
